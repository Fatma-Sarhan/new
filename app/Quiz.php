<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Lesson;

/**
 * Class Quiz.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:06:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Quiz extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'quizs';

    /* 1:M  lessons : quizs */
    public function lesson()
    {
    	 return $this->belongsTo('App\Lesson');
    }

	
}
