<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
    public function index()
    {
    	$subjects = Subject::all();
    	return view('subjects.index')->with('subjects', $subjects);
    }

    public function add()
    {
    	return view('subjects.add');
    }

    public function store()
    {
        request()->validate([
            'subject' => 'required'  
        ]);
        
    	$subject = new Subject;
    	$subject->name = request()->subject;
    	$subject->save();

    	return redirect('/teachers');
    }
}
