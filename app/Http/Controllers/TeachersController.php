<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeachersController extends Controller
{
    public function index()
    {
    	$teachers = Teacher::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }

    public function add()
    {
    	return view('teachers.add');
    }

    public function store()
    {
        request()->validate([
            'teacher' => 'required',
            'advisory_section' => 'required'  
        ]);
        
    	$teacher = new Teacher;
    	$teacher->name = request()->teacher;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }
}
