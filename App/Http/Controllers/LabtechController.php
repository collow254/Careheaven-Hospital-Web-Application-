<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

use App\Models\Test;

use App\Models\Result;

class LabtechController extends Controller
{
    public function labtechhome()
    {
        return view('labtech.labtechhome');
        
    }

    public function labtechpatients()
    {
    	 $data=patient::all();
        return view('labtech.labtechpatients', compact('data'));
        
    }

    public function labtechtests()
    {
    	 $data=test::all();
        return view('labtech.labtechtests', compact('data'));
        
    }

    public function labtechresults()
    {
    	  
         $data=result::all();
        return view('labtech.labtechresults', compact('data'));
        
    }

   
}
