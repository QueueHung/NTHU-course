<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\CourseInfo;
use \App\CourseClass;

class CoursesController extends Controller
{
    //
    public function show(){

    	$courses = CourseInfo::all();
    	/*
    	$courses = CourseInfo::where('course_class','AES')->get()->toArray();
    	dd($courses);
    	*/
    	$courses_classes = CourseClass::all();	
    	return view('.CourseInfo',['courses'=>$courses,'classes'=>$courses_classes]);

    }

    public function Ajaxupdate(Request $request){
    	$courses = CourseInfo::where('course_class',$request->input('SelectedClass'))->get();
    	return  response()->json(array(
                  'status' => 'success',
                  'courses' => $courses,
         		));
    }
}
