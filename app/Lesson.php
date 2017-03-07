<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Section;
use App\Quiz;
use App\Online_lec;
use App\Digital_content;
use App\Recorded_lec;

/**
 * Class Lesson.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:04:21am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Lesson extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'lessons';

    /* 1:M subjects : lessons */
    public function section()
    {
    	return $this->belongsTo('App\Section');
    }

    /* 1:M  lessons : quizs  */
    public function quizs()
    {
    	return $this->hasMany('App\Quiz');
    }

    /* 1:M  lessons : online_lecs  */
    public function online_lecs()
    {
    	return $this->hasMany('App\Online_lec');
    }

    /* 1:M  lessons : recorded_lecs  */

    public function recorded_lecs()
    {
    	return $this->hasMany('App\Recorded_lec');

    }

    /* 1:M  lessons : digital_contents */
	public function digital_contents()
    {
    	return $this->hasMany('App\Digital_content');

    }
}
