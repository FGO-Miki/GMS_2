<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeachersLoad;
use App\Section;
use App\Subject;

class TeachersLoadsController extends Controller
{
    public function index()
    {
    	$teachers_loads = Subject_strand::all();
    	return view('teachers_loads.index')->with('teachers_loads', $teachers_loads);
    }
    public function add()
    {
        $subjects = Subject::all();
        $strands = Strand::all();

        return view('teachers_loads.add',compact('subjects','strands'));
    	
    }
     public function store()
    {
        request()->validate([
            'subject_id' => 'required',
            'strand_id' => 'required',
            'semester' => 'required',
            'grade_level' => 'required',         
        ]);
        
    	$subject_strand = new Subject_strand;
    	$subject_strand->subject_id = request()->subject_id;
        $subject_strand->strand_id = request()->strand_id;
        $subject_strand->semester = request()->semester;
        $subject_strand->grade_level = request()->grade_level;
        
    	$subject_strand->save();

    	return redirect('/teachers_loads');
    }
    
   
    public function edit(Subject_strand $subjectstrand)
    {
        return view('teachers_loads.edit')->with('subject_strand', $teachers_loads);
    }

    public function update(Subject_strand $subjectstrand)
    {
        $subjectstrand->name = request()->name;
        $subjectstrand->save();
        return redirect('/teachers_loads');
    }
}
