<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Lesson;

/**
 * Class Recorded_lec.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:08:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Recorded_lec extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'recorded_lecs';

    /* 1:M  lessons : recorded_lecs */
    public function lesson()
    {
    	 return $this->belongsTo('App\Lesson');
    }

	
}
