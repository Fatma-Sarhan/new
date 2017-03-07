<?php

namespace App\Http\Controllers\ScaffoldInterface;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Auth;
use App\User;
use App\Degree;
use DB;
use Crypt;
use Image; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = \App\User::all();

        return view('scaffold-interface.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scaffold-interface.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new \App\User();

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::findOrfail($id);
        $roles = Role::all()->pluck('name');
        $permissions = Permission::all()->pluck('name');
        $userRoles = $user->roles;
        $userPermissions = $user->permissions;

        return view('scaffold-interface.users.edit', compact('user', 'roles', 'permissions', 'userRoles', 'userPermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \App\User::findOrfail($request->user_id);

        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrfail($id);

        $user->delete();

        return redirect('users');
    }

    /**
     * Assign Role to user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function addRole(Request $request)
    {
        $user = \App\User::findOrfail($request->user_id);
        $user->assignRole($request->role_name);

        return redirect('users/edit/'.$request->user_id);
    }

    /**
     * Assign Permission to a user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function addPermission(Request $request)
    {
        $user = \App\User::findorfail($request->user_id);
        $user->givePermissionTo($request->permission_name);

        return redirect('users/edit/'.$request->user_id);
    }

    /**
     * revoke Permission to a user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function revokePermission($permission, $user_id)
    {
        $user = \App\User::findorfail($user_id);

        $user->revokePermissionTo(str_slug($permission, ' '));

        return redirect('users/edit/'.$user_id);
    }

    /**
     * revoke Role to a a user.
     *
     * @param \Illuminate\Http\Request
     *
     * @return \Illuminate\Http\Response
     */
    public function revokeRole($role, $user_id)
    {
        $user = \App\User::findorfail($user_id);

        $user->removeRole(str_slug($role, ' '));

        return redirect('users/edit/'.$user_id);
    }

    /* Edit by Fatma */

    public function profile()
    {
        $user =  Auth::user();
        $user_degrees = $user->degrees;
        foreach ($user_degrees as $user_degree) 
        {
            $degree_name = $user_degree->name;
        }
        $user_subjects = $user->subjects;

        $roles = DB::table('user_has_roles')
                ->where('user_id' , $user->id)
                ->get()->pluck('role_id');
        
        return view('users.profile',compact('degree_name','user_subjects','roles'));
             
    }

    public function uploadimg(User $user , Request $request)
    {
        $id = Auth::user()->id;
        $currentuser = User::where('id',$id)->first();
        if (Input::hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time() . '.' .$image-> getClientOriginalExtension();
            $currentuser->profile_image = '/profileimages/'.$imageName;
            $currentuser->update();

            $path = public_path('profileimages/' . $imageName);
            Image::make($image->getRealPath())->resize(400, 520)->save($path);
            
            /*$request->file('image')->move(base_path() . '/public/profileimages/', $imageName );*/

            return redirect('/profile');


        }
        else
        {
            return redirect('/profile');
        }

    }
    public function editprofile($id,Request $request)
    {
       
        // return $id ;
        $user =  Auth::user();
        // return $user->id;
        if ($id != $user->id)
        {
            return view('errors.404');

        }
        else
        {
            $degrees = \App\Degree::all();
            $user_degrees = $user->degrees;
            foreach ($user_degrees as $user_degree) 
            {
                $degree_name = $user_degree->name;
            }
            $user_subjects = $user->subjects;
            // return $user_degrees ;
               
            return view('users.setting',compact('degrees' ,'degree_name'));

        }
        
         
    }
    public function updateprofile(User $user ,Request $request)
    {
        $user =  Auth::user();
        // Update data from user table ..
        $user->name = $request->name;
        $user->full_name =$request->full_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->school_name = $request->school;

        // User profile image ..
        if (Input::hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time() . '.' .$image-> getClientOriginalExtension();
            $user->profile_image = '/profileimages/'.$imageName;
            $path = public_path('profileimages/' . $imageName);
            Image::make($image->getRealPath())->resize(400, 520)->save($path);
        }

        $user->update();

        // User selected degree ..
        if (!empty($request->degree))
        {
            echo $request->degree;
            $degree = Degree::where('name',$request->degree)->first();
            $old_degree = DB::table('degree_user')->where('user_id' , 
                $user->id)->get();

            if(count($old_degree) > 0 )
             {
                DB::table('degree_user')
                ->where('user_id' , $user->id)
                ->update(['degree_id'=> $degree->id]);
             }
            else
             {
                DB::table('degree_user')
                ->insertGetId(['user_id' =>  $user->id , 'degree_id' => $degree->id ]);
             }
             

        }
       
        return redirect('/profile');
        
    }
    public function listcourses()
    {
        $user =  Auth::user();
        $user_degrees = $user->degrees;
        foreach ($user_degrees as $user_degree) 
        {
            $degree_name = $user_degree->name;
        }
        $user_subjects = $user->subjects;

        return view('users.courses',compact('user_subjects'));

    }
    public function favcourses()
    {
        $user =  Auth::user();
        $user_degrees = $user->degrees;
        foreach ($user_degrees as $user_degree) 
        {
            $degree_name = $user_degree->name;
        }
        $user_subjects = $user->subjects;

        return view('users.favcourses',compact('user_subjects'));

    }
    public function classes()
    {
         return view('users.classes');
    }

    /* Admin pannel functions */
    public function cp_verify($id)
    {
        $user = \App\User::findOrfail($id);
        
        
        if($user->verified == 0)
         {
            $user->verified = 1;
            $user->update();
            return redirect('/users');
         }
        if($user->verified == 1)
        {
            $user->verified = 0;
            $user->update();
            return redirect('/users');
         }

        
    }

}
