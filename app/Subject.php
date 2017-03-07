<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;


use App\Degree;
use App\Section;
use App\User;

/**
 * Class Subject.
 *
 * @author  The scaffold-interface created at 2017-02-18 08:59:29am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Subject extends Model
{
	use Searchable;
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'subjects';

    /* 1:M degrees : subjects */
    public function degree()
    {
    	 return $this->belongsTo('App\Degree');
    }
    /* 1:M subjects : sections */
    public function sections()
    {
         return $this->hasMany('App\Section');
    }
    /* M:M subjects : users */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

	
}
