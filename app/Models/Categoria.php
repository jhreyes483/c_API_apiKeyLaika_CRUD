<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
    protected $primaryKey = 'id_categoria';
    protected $table      = 'categorias';
    protected $fillable   = [
        'nom_categoria',
        'descript'
    ];
}
