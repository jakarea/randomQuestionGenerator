<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Session;
use Auth;

class userController extends Controller
{
	
    public function store(Request $request){

    	if(Auth::user()){
    		if(Auth::user()->role !=1){
    		flash('You have no permission for this section','danger');
    		return redirect()->back();
    		}
    	}
    	
    	$this->validate($request, [
        'email' => 'required|unique:users|max:55',
        'fullname' => 'required',
        'password' => 'min:6|required',
        'repassword' => 'min:6|same:password'  
    ]);
		$user = new User();
    	$data['password'] = $request->input('password');
    	$data['repassword'] = $request->input('repassword');
    	$user->password = bcrypt($data['password']);
    	$user->fullname = $request->input('fullname');
    	$user->email  = $request->input('email');
    	
    	if(empty($request->input('status'))){
    		$user->status  = 0;
    	}else{
    		$user->status  = $request->input('status');
    	}

    	if(empty($request->input('role'))){
    		$user->role  = 0;
    	}else{
    		$user->role  = $request->input('role');
    	} 
		$done = $user->save();
		if($done){
			flash('Operation successful','success');
		}else{
			flash('Oh Allah! Something went wrong','danger');
		}
    	$users = User::all();
		return redirect('/user');
    }

	public function allUser(Request $request){
		$key = $request->input('key'); 
		$status = $request->input('status'); 
		$input = $request->only(['key','starus']);
		$users = User::orderBy('user_id');
		if(!empty($key)){
			$users->where('email','like','%'.$key.'%');
			$users->orWhere('fullname','like','%'.$key.'%');
		}
		if(!empty($status)){
			if($status =="Active" ){
				$status = 1;
			}elseif($status == "Pending"){
				$status = 0;
			}else{
				$status = -1;
			}
			$users->where('status','like','%'.$status.'%');
		}
		$users = $users->paginate(12);
		$users->appends($input);
		return view('admin.user.users',compact('users'));
	}

	public function editUser($id = null){
		if(Auth::user()->role != 1){
			flash('You have no permission to edit others.','warning');
			$id = Auth::user()->user_id;
		}
		$user = User::find($id);
		return view('admin.user.editUser',compact('user'));
	}

	public function deleteUser($id = null){
		if(Auth::user()->role != 1){
			flash('You have no permission to delete user.','warning');
			return redirect()->back();
		}
		$user = User::find($id);
		$done = $user->delete($user);
		if($done){
			flash('Operation successful','success');
		}else{
			flash('Oh Allah! Something went wrong','danger');
		}
		return redirect('user');
	}

	public function addUser(){
		return view('admin.user.adduser');
	}
	public function updateUser(Request $request){
		if(!empty($request->password)){
			$input['password'] = bcrypt($request->password);
		}
		$input['fullname'] = $request->fullname;
		$input['email'] = $request->email;
		$input['role'] = $request->role;
		$input['status'] = $request->status;
		$user = User::find($request->user_id);
    	$done = $user->update($input);
    	if($done){
			flash('Operation successful','success');
		}else{
			flash('Oh Allah! Something went wrong','danger');
		}
		return redirect('user');
	}

	public function profile(){
		$id = Auth::user()->user_id;
		$user = User::find($id);
		return view('admin.user.profile',compact('user'));
	}
}
