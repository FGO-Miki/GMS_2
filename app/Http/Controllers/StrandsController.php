<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strand;

class StrandsController extends Controller
{
    public function index()
    {
    	$strands = Strand::all();
    	return view('strands.index')->with('strands', $strands);
    }

    public function add()
    {
    	return view('strands.add');
    }

    public function store()
    {
        request()->validate([
            'strand' => 'required'  
        ]);
        
    	$strand = new Strand;
    	$strand->name = request()->strand;
    	$strand->save();

    	return redirect('/strands');
    }
}
