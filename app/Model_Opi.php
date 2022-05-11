<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Opi extends Model
{
    protected $table = "tbopi";
    protected $fillable = [
          'nama', 'judul','angkatan','nilai','image','pembimbing'
    ];
}
