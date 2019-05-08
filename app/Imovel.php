<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = ['tipo', 'pretensao', 'titulo', 'detalhes', 'quartos', 'valor'];
    protected $guarded = ['id','created_at','update_at'];
    protected $table = 'imoveis';
}
