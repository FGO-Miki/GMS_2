<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionsController extends Controller
{
    public function index()
    {
    	$sections = Section::all();
    	return view('sections.index')->with('sections', $sections);
    }

    public function add()
    {
    	return view('sections.add');
    }

    public function store()
    {
        request()->validate([
            'section' => 'required',
            'is_active' => 'required'  
        ]);
        
    	$section = new Section;
    	$section->name = request()->section;
    	$section->is_active = request()->is_active;
    	$section->save();

    	return redirect('/sections');
    }
}
