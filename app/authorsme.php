<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class authorsme extends Model
{
    protected $table = 'authors';
    protected $fillable = ['name','date_of_birth','place_of_birth','gender','email','hp'];
}