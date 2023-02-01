<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_local extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $table = 'prod_local';
}
