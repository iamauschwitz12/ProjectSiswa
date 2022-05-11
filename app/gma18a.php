<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gma18a extends Model
{
  protected $table = "gma18a";
    protected $fillable = [
        'nama', 'judul','kosentrasi','nilai','image'
    ];
}
