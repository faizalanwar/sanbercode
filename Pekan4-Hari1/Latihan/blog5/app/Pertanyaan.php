<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    
        protected $table = "test";
        protected $fillable = ["judul", "isi"];
        public $timestamps = false;
    
}
