<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;
    protected $table = 'cliente_models';
    protected $fillable = [
        'id',
       'nombres_apellidos',
       'correo',
       
    ];
}
