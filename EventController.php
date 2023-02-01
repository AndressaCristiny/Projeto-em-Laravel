<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Ibge;
use App\Models\Prod_local;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\api;

class EventController extends Controller
{

    public function Index(){
        
        $ibge = Http::get('http://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios');
        $ibgeArray = $ibge->json();

        $BDibge = Ibge::all();
        $n = $BDibge->count();

        if($n == 0){
            foreach($ibgeArray as $ibgeAr){
                $ibgeNew = new Ibge;

                $ibgeNew->ibge_id = $ibgeAr['id'];
                $ibgeNew->ibge_name = $ibgeAr['nome'];

                $ibgeNew->save();
            }
        }

    return view('restaurante', compact('ibgeArray'));
    }


    //Funções
    public function Create (Request $request){

        $produto = new Produto;
        $prod_local = new Prod_local;

        $produto->name = $request->name;
        $produto->category = $request->category;
        $produto->status = $request->status;
        $produto->quantity = $request->quantity;

        $prod_local->nome_ibge = $request->munic;
        $prod_local->nome_prod = $request->name;

        $produto->save();
        $prod_local->save();



        return redirect('/php/create.blade.php');
    }

    public function Update (Request $request){

        Produto::findOrfail( $id = $request->id)->Update($request->all());
        return redirect('/php/update.blade.php');
    }

    public function Delete (Request $request){

        $id = $request->id;
        Produto::findOrfail($id)->delete();
        return redirect('/php/delete.blade.php');
    }



    //API
    public function ApiList(){
        return response()->json(
            Produto::get(),
        ); 
    }

    public function ApiIbge(){
        return response()->json(
            Ibge::get(),
        ); 
    }

    public function ApiProd_local(){
        return response()->json(
            Prod_local::get(),
        ); 
    }

    //View , ['list' => $list]
    public function ListCre(){
        $municipios = Ibge::all();
        $produtos = Produto::all();
        $prod_local = Prod_local::all();
        return view('php.create', ['municipios' => $municipios], ['produtos' => $produtos]);
    }

    public function ListUp(){

        $produtos = Produto::all();
        return view('php.update', ['produtos' => $produtos]);
    }

    public function ListDel(){

        $produtos = Produto::all();
        return view('php.delete', ['produtos' => $produtos]);
    }



    //API no BD
    public function IBGE(){
        
    }
}
