<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakers extends Model
{
    protected $table = 'fakers';

    public $dataDelete = ['name'=>'DELETED'];

    protected $fillable = [
        'name',
        'age',
        'country'
    ];
}
