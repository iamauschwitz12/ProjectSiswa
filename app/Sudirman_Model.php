<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sudirman_Model extends Model
{
  protected $table = "tbsudirman";
  protected $fillable = [
        'nama', 'judul','angkatan','nilai','image','pembimbing'
  ];
}
