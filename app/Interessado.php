<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interessado extends Model
{
    protected $fillable = ['nome', 'email'];
    protected $guarded = ['id','created_at','update_at'];
    protected $table = 'interessados';
}