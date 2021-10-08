<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books';
    protected $fillable = ['title','description','author','publisher','date_of_issue'];
}
