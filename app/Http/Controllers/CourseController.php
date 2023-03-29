<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('course.index');
    }

    public function edit($id)
    {
        if (auth()->user()->user_type === 1 || auth()->user()->user_type === 2){
            return view('course.edit',['id' => $id]);
        }else{
            flash()->addWarning('You can not access to edit course!');
            return redirect('course');
        }
    }

    public function create(){
        if (auth()->user()->user_type === 1){
            return view('course.create');
        }else{
            flash()->addWarning('You can not access to create course!');
            return redirect('course');
        }
    }
}
