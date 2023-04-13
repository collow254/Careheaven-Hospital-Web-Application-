<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\Posts;

use App\Models\Career;

use App\Models\Visit;

use App\Models\Test;

use App\Models\Medicine;

use App\Models\Result;

use App\Models\Bill;

use App\Models\Contactus;


class HomeController extends Controller
{
    public function redirect()
    {

    	if(Auth::id())
    	{
    		if(Auth::user()->usertype=='patient')
    		{

                $doctor=doctor::all();
                
               $status='published';

                $post= posts::where('status', $status)->get();

                $careerstatus='opened';
            $career=career::where('status', $careerstatus)->get();

            
                 return view('user.home', compact('doctor','post','career'));
    }
    		else if(Auth::user()->usertype=='admin')
    			{
    			return view('admin.admindashboard');
    		}

            else if(Auth::user()->usertype=='receptionist')
            {
                return view('receptionist.receptionistdashboard');
            }

             else if(Auth::user()->usertype=='elp')
            {
                $doctor=doctor::all();
                
               $status='published';

                $post= posts::where('status', $status)->get();

                $careerstatus='opened';
                $career=career::where('status', $careerstatus)->get();

            
                 return view('elp.elphome', compact('doctor','post','career'));
                
            }

             else if(Auth::user()->usertype=='doctor')
            {
                          
                 return view('doctor.doctorhome');
                
            }

            else if(Auth::user()->usertype=='labtech')
            {
                          
                 return view('labtech.labtechhome');
                
            }

             else if(Auth::user()->usertype=='cashier')
            {
                          
                 return view('cashier.cashierhome');
                
            }

            else if(Auth::user()->usertype=='pharmacist')
            {
                          
                 return view('pharmacist.pharmacisthome');
                
            }

            else if(Auth::user()->usertype=='superadmin')
            {
                          
                 return view('superadmin.superadminhome');
                
            }


    	}
    	else
    	{
    		return redirect()->back();

    	}

    }

    public function index()
    {
        if(Auth::id())
        {
           
           
            return redirect('home');
        }
        else
        {
            $doctor=doctor::all();
            $status='published';
            $post= posts::where('status', $status)->get();
            $careerstatus='opened';
            $career=career::where('status', $careerstatus)->get();


            
            return view('user.home', compact('doctor','post', 'career'));
    	   
        }
    }

    public function appointment(Request $request)
    {
        $data=new appointment;
        if(Auth::id())
        {
        $userid=Auth::user()->id;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->doctorname=$request->doctor;
        $data->message=$request->message;
        $data->status='In progress';
        $data->user_id=$userid;
        
    }

    else{
        
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->doctorname=$request->doctor;
        $data->message=$request->message;
        $data->status='In progress';
        
    }
    $data->save();
    return redirect()->back()->with('message', 'Appointment request successful. we will contact you soon. Thank you');
    }

    public function contactus(Request $request)
    {
        $data=new contactus;
        if(Auth::id())
        {
        $userid=Auth::user()->id;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->user_id=$userid;
        
    }

    else{
        
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        
    }
    $data->save();
    return redirect()->back()->with('message', 'Message sent successful. we will contact you soon. Thank you');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint= appointment::where('user_id', $userid)->get();

            return view('user.my_appointment', compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->status='cancelled';

        $data->save();

        return redirect()->back();
    }

    public function delete_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function posts()
    {
        $status='published';
        $post= posts::where('status', $status)->get();
        return view('user.posts', compact('post'));
    }



     public function postdetails(Request $request, $id)
    {
        $posts = posts::find($id);

        return view('user.postdetails', compact('posts'));
    }

    public function homepage()
    {
            $doctor=doctor::all();
            $status='published';
            $post= posts::where('status', $status)->get();
             $careerstatus='opened';
            $career=career::where('status', $careerstatus)->get();
            
            return view('user.home', compact('doctor','post', 'career'));
           
        }

         public function doctors()
    {
         $doctor=doctor::all();
        return view('user.doctors', compact('doctor'));
    }
public function about()
    {
        $doctor=doctor::all();
        return view('user.about', compact('doctor'));
    }
    
public function contact()
    {
        return view('user.contact');
    }


    public function myhistory()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $data= visit::where('patientId', $userid)->get();

            return view('user.myhistory', compact('data'));
        }
        else
        {
            return redirect()->back();
        }
    }

     public function medicalhistory(Request $request, $id)
    {

        $data= test::where('visitId', $id)->get();
        $resultdata= result::where('visitId', $id)->get();
        $medicine= medicine::where('visitId', $id)->get();
         
        return view('user.medicalhistory', compact('data', 'resultdata', 'medicine'));
        
    }

    public function patientbill(Request $request, $id)
    {

        $data= bill::where('visitId', $id)->get();
         
        return view('user.patientbill', compact('data'));
        
    }
 

 public function innitiatepayment()
    { 
         
        return view('user.initiatepayment');
        
    }

    public function insurance()
    {  
        return view('user.insurance');
        
    }


    public function diagnose()
    {  
        return view('user.diagnose');
        
    }
    
}
