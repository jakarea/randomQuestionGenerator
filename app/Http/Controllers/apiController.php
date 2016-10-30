<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;
use DB;

class apiController extends Controller {

	public function courseTitle($query=""){
		$courses = Course::orderBy('title');
		if(!empty($query)){
			$courses->Where('title','like','%'.$query.'%');
		}
		$courses = $courses->get();
		return $courses->toJson();
	}

	public function courseCode($query=""){
		$courses = Course::orderBy('title');
		if(!empty($query)){
				$courses->Where('code','like','%'.$query.'%');
			}
			$courses = $courses->get();
		return $courses->toJson();
	}
}
