<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
       'ar_name', 'ar_details', 'image', 'permalink', 'keywords', 'description',
  ];


}
