<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Lesson;

/**
 * Class Online_lec.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:07:59am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Online_lec extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'online_lecs';

    /* 1:M  lessons : online_lecs */
    public function lesson()
    {
    	 return $this->belongsTo('App\Lesson');
    }

	
}
