<?php namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    protected $table= 'albums';
    protected $fillable = ['name', 'published', 'band_id'];

    public function band(){
        return $this->belongsTo('Vinyl\Band');
    }
}