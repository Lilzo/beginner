<?php namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Band extends Model{
    public $timestamps = false;

    public function albums(){
        return $this->hasMany('Vinyl\Album');
    }
}