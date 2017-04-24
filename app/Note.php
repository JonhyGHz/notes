<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Atributos
    protected $fillable = ['note'];

    public function Category()
    {
      return $this->belongsTo(Category::class);
    }
}
