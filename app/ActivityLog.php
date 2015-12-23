<?php   namespace Vinyl;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model{
    protected $table='activity_logs';
    protected $fillable=['user_id', 'area', 'applicant', 'problem', 'activity', 'description', 'is_solved'];

    public function user(){
        return $this->belongsTo('Vinyl\User');
    }

}
