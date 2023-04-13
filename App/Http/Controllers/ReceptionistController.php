<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

use App\Models\Doctor;

use App\Models\Visit;

class ReceptionistController extends Controller
{
    public function receptionistdashboard()
    {


    	return view('receptionist.receptionistdashboard');

    }

    public function addpatient()
    {


    	return view('receptionist.addpatient');

    }

    public function addvisit()
    {

        $doctor=doctor::all();
        $patient=patient::all();        
        return view('receptionist.addvisit', compact('doctor', 'patient'));

    }


     public function upload_patient(Request $request)
    {
    	$patient=new patient;

    	$image=$request->file;

    	$imagename=time().'.'.$image->getClientOriginalExtension();

    	$request->file->move('patientimage',$imagename);

    	$patient->image=$imagename; 
    	
    	$patient->name=$request->name;  

    	$patient->age=$request->age; 

    	$patient->gender=$request->gender; 

    	$patient->citizenship=$request->citizenship; 

    	$patient->id_number=$request->id_number; 

    	$patient->county=$request->county; 

    	$patient->village=$request->village; 

    	$patient->phone=$request->phone;

    	$patient->email=$request->email;  

    	$patient->insurance=$request->insurance;


    	$patient->save();

    	return redirect()->back()->with('message','Patient added successfully. The patient number is {{$patient->id}}');
    }


    

     public function bookappointment()
    {

    	 $doctor=doctor::all();


    	return view('receptionist.bookappointment', compact('doctor'));

    }

    public function uploadvisit(Request $request)
    {
        $data=new visit;
        
        $data->patientId=$request->patient;
        $data->doctorId=$request->doctor;


        $data->save();

        return redirect()->back()->with('message','Visit added successfully.');
        
        
    }


}
