<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Patient;

use App\Models\Visit;

use App\Models\Test;

use App\Models\Result;

use App\Models\Medicine;

use App\Models\Appointment;

use App\Models\AllTests;

use App\Models\User;

use App\Models\Symptom;


class DoctorController extends Controller
{

	public function doctorhome()
    {
    	 
        return view('doctor.doctorhome');
        
    }

    public function mypatients()
    {
    	 $data=patient::all();
        return view('doctor.mypatients', compact('data'));
        
    }

    public function tests()
    {
    	 $data=doctor::all();
        return view('doctor.tests', compact('data'));
        
    }

     public function results()
    {
    	 $data=result::all();
        return view('doctor.results', compact('data'));
        
    }

    public function referrals()
    {
    	 $data=doctor::all();
        return view('doctor.referrals', compact('data'));
        
    }

    public function individualpatient(Request $request, $id)
    {
        $data = patient::find($id);

        return view('doctor.individualpatient', compact('data'));
    }

    public function patienthistory(Request $request, $id)
    {

        $data= test::where('visitId', $id)->get();
        $resultdata= result::where('visitId', $id)->get();
        $medicine= medicine::where('visitId', $id)->get();
         
        return view('doctor.patienthistory', compact('data', 'resultdata', 'medicine'));
        
    }
    
    public function visits(Request $request, $id)
    {
        $data= visit::where('patientId', $id)->get();
        

        return view('doctor.visits', compact('data'));
    }

    public function alltests()
    {
         $data=patient::all();
        return view('doctor.alltests', compact('data'));
        
    }

    public function patienttests(Request $request, $id)
    {
         $data=test::where('visitId', $id)->get();
        return view('doctor.patienttests', compact('data'));
        
    }

    public function patientrecords(Request $request, $id)
    {
        $data= visit::where('patientId', $id)->get();
        

        return view('doctor.patientrecords', compact('data'));
    }

    public function individualresults(Request $request, $id)
    {
         $data=result::where('visitId', $id)->get();
        return view('doctor.individualresults', compact('data'));
        
    }


    public function doctorappointments()
    {
        if(Auth::id())
        {
            $username=Auth::user()->name;

            $appoint= appointment::where('doctorname', $username)->get();

            return view('doctor.doctorappointments', compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function addtest()
    {
         
        $tests=AllTests::all();
        $patient=user::all();  
        $visits=visit::all();      
        return view('doctor.addtest', compact('tests', 'patient', 'visits'));
        
    }

     public function addsymptoms()
    {
        $symptoms=symptom::all();
        $patient=patient::all();  
        $visits=visit::all();      
        return view('doctor.addsymptoms', compact('symptoms', 'patient', 'visits'));
        
    }

     public function uploadtest(Request $request)
    {
        if(Auth::id())
        {
            $test=new test;
            $doctorid=Auth::user()->id;
             $test->patientId=$request->patient;  
            $test->visitId=$request->visit;
            $test->doctorId=$doctorid;
            $test->test=$request->test;
            $test->medicine='not given';

            

            
        $test->save();

        return redirect()->back()->with('message','Test added successfully.');
        }
        
    }

    public function uploadsymptom(Request $request)
    {
        if(Auth::id())
        {
            $symptom=new symptom;
            $doctorid=Auth::user()->id;
             $symptom->patientId=$request->patient;  
            $symptom->visitId=$request->visit;
            $symptom->doctorId=$doctorid;
            $symptom->symptom=$request->test;
            

            

            
        $symptom->save();

        return redirect()->back()->with('message','Symptom added successfully.');
        }
        
    }

}
