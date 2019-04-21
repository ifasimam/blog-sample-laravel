<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tArtikel extends Model
{
    //
    public $table = "t_artikel";
    protected $fillable = [
        'title',
        'content',
        'image'
    ];
}
