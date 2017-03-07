<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Subject;
use App\Lesson;
/**
 * Class Section.
 *
 * @author  The scaffold-interface created at 2017-02-18 09:38:01am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Section extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'sections';

    /* 1:M subjects : sections */
    public function subject()
    {
    	 return $this->belongsTo('App\Subject');
    }

    /* 1:M subjects : lessons */
    public function lessons()
    {
    	return $this->hasMany('App\Lesson'); 
    }
	
}
