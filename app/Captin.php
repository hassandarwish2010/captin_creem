<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captin extends Model
{
    //captins
     protected $table = 'captins';

       protected $fillable = [
       'name', 'phone', 'car_brand', 'year',
  ];
}
