<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserved extends Model
{
  protected $fillable = [
    'hall',
    'date',
    'name'
  ];
  protected $hidden = [
    'created_at',
    'updated_at'
  ];

}
