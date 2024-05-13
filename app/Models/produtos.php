<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $table = 'produtos';
    protected $fillabel = ['nome, preco, quantidade_estoque'];
}
