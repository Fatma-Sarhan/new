<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Krucas\LaravelUserEmailVerification\Contracts\RequiresEmailVerification as RequiresEmailVerificationContract;
// use Krucas\LaravelUserEmailVerification\RequiresEmailVerification;

use App\Subject;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;
    // use RequiresEmailVerification;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','full_name','email_token','verified',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
     * degree.
     *
     * @return  \Illuminate\Support\Collection;
     */

    /* soft delete */

    protected $dates = ['deleted_at'];

    public function degrees()
    {
        return $this->belongsToMany('App\Degree');
    }

    /**
     * Assign a degree.
     *
     * @param  $degree
     * @return  mixed
     */
    public function assignDegree($degree)
    {
        return $this->degrees()->attach($degree);
    }
    /**
     * Remove a degree.
     *
     * @param  $degree
     * @return  mixed
     */
    public function removeDegree($degree)
    {
        return $this->degrees()->detach($degree);
    }

    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }

    /* M:M subjects : users */

    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

}
