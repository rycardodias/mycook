<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receita extends Model
{
    //table name
    protected $table = 'receitas';
    //primary key
    public $primaryKey = 'id';
}
