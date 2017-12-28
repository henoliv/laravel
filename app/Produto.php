<?php

namespace Estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillable = ['nome', 'descricao', 'valor', 'quantidade'];
    protected $guarded = ['id'];
}
