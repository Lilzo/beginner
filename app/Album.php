<?php namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    protected $fillable = ['name', 'published', 'band_id'];
    public function album(){
        return $this->belongsTo('Vinyl\Band');
    }
}