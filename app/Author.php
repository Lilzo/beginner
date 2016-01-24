<?php

namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table='authors';
    protected $fillable=['author_id', 'name', 'release_year', 'stock', 'rented'];
    public $timestamps = false;

    public function books(){
        return $this->hasMany('Vinyl\Book');
    }
}
