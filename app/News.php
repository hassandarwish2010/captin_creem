<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  /**
   * Table name
   *
   * @return string
   */
  protected $table = 'news';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
       'ar_title', 'ar_details', 'image', 'permalink', 'keywords', 'description',
  ];
}
