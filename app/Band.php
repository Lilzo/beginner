<?php namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Band extends Model{
    public $timestamps = false;
    public function album(){
        return $this->hasMany('Vinyl\Band');
    }
}