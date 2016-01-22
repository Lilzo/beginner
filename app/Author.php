<?php

namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table='authors';
    protected $fillable=['author_id', 'name', 'release_year', 'stock', 'rented'];

    public function author(){
        return $this->hasMany('Vinyl\Book');
    }
}
