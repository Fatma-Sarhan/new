<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Lesson;

/**
 * Class Digital_content.
 *
 * @author  The scaffold-interface created at 2017-02-18 07:07:26am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Digital_content extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'digital_contents';
    
    
    /* 1:M  lessons : digital_contents */
    public function lesson()
    {
    	 return $this->belongsTo('App\Lesson');
    }

	
}
