<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas'; 

    protected $primaryKey = 'id'; 

    protected $fillable = [
        'funcionario_id',
        'cliente_id',
        'total_venda'
    ];
}
