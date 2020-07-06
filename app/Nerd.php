<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nerd extends Model
{
    protected $fillable = [
      'email',
      'name',
      'nerd_level'
    ];
}
