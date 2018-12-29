<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    //table name
    protected $table = 'ingredientes';
    //primary key
    public $primaryKey = 'id';
}
