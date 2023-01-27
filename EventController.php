<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Ibge;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{

    public function Index(){
        
        /*$ibge = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/33/municipios');
        $ibgeArray = $ibge->json();

        $ibgeNew = new Ibge;

        $ibgeNew->ibge_id = $ibgeArray->id;
        $ibgeNew->ibge_name = $ibgeArray->nome;*/

        return view('restaurante');
    }


    //Funções
    public function Create (Request $request){

        $produto = new Produto;

        $produto->name = $request->name;
        $produto->category = $request->category;
        $produto->status = $request->status;
        $produto->quantity = $request->quantity;

        $produto->save();

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



    //View
    public function ListCre(){

        /*Informações da API

        $lista = Http::get('http://127.0.0.1:8000/api/ListProd')->json();
         OU...
        $lista = Http::get('http://127.0.0.1:8000/api/ListProd');
        $listaArray = $lista->json();
         OU...
        $lista = file_get_contents('http://127.0.0.1:8000/api/ListProd');
        $listaDate = json_decode($json, true);

        Informações do Banco de dados*/
        $produtos = Produto::all();
        return view('php.create', ['produtos' => $produtos]);
    }

    public function ListUp(){

        $produtos = Produto::all();
        return view('php.update', ['produtos' => $produtos]);
    }

    public function ListDel(){

        $produtos = Produto::all();
        return view('php.delete', ['produtos' => $produtos]);
    }



    //API
    public function ApiList(){
            return response()->json(
                Produto::get(),
            ); 
    }



    //API no BD
    public function IBGE(){
        
    }
}
