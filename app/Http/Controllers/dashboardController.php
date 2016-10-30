<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

use App\Http\Requests;

class dashboardController extends Controller
{
	
    public function index(){
    	$pending = User::where('role',0)->count();
        return view('admin.layout',compact('pending'));
    }
}
