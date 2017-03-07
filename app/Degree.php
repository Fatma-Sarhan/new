<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use App\Subject;
/**
 * Class Degree.
 *
 * @author  The scaffold-interface created at 2017-02-18 06:59:10am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Degree extends Model
{
    
    use Searchable;
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'degrees';

	

	/**
     * user.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Assign a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function assignUser($user)
    {
        return $this->users()->attach($user);
    }
    /**
     * Remove a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function removeUser($user)
    {
        return $this->users()->detach($user);
    }


    /* 1:M degrees : subjects */

    public function subjects()
    {
         return $this->hasMany('App\Subject');
    }

}
