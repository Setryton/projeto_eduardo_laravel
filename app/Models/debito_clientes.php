<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class debito_clientes extends Model
{
    protected $table = 'debito_cliente';
    protected $fillabel = ['valor, data, descricao'];
}
