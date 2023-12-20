<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'clientes';
    protected $primaryKey = 'ID_Cliente';

    protected $fillable = [
        'Nombre',
        'Cedula',
        'Telefono',
        'Correo_Electronico'
    ];
}

