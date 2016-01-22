<?php

namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';
    protected $fillable=['author_id', 'name', 'release_year', 'stock', 'rented'];

    public function author(){
        return $this->belongsTo('Vinyl\Author');
    }

}
