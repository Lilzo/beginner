<?php namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Band extends Model{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function albums(){
        return $this->hasMany('Vinyl\Album');
    }
}