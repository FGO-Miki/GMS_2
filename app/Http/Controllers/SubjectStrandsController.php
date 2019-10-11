<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject_strand;
use App\Strand;
use App\Subject;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subject_strands = Subject_strand::all();
    	return view('subject_strands.index')->with('subject_strands', $subject_strands);
    }
    public function add()
    {
        $subjects = Subject::all();
        $strands = Strand::all();

        return view('subject_strands.add',compact('subjects','strands'));
    	
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

    	return redirect('/subject_strands');
    }
    
   
    public function edit(Subject_strand $subjectstrand)
    {
        return view('subject_strands.edit')->with('subject_strand', $subject_strands);
    }

    public function update(Subject_strand $subjectstrand)
    {
        $subjectstrand->name = request()->name;
        $subjectstrand->save();
        return redirect('/subject_strands');
    }
}
