<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kumpulanresep extends Model
{
    protected $table = 'kumpulanresep';
    protected $fillable = ['namamakanan','deskripsi','bahandancara','gambar'];
}
