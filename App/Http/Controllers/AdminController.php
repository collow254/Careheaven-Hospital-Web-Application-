<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\Posts;

use App\Models\Hospital;

use App\Models\Career;

class AdminController extends Controller
{
    public function addview()
    {


    	return view('admin.add_doctor');

    }


    public function upload(Request $request)
    {
    	$doctor=new doctor;

    	$image=$request->file;

    	$imagename=time().'.'.$image->getClientOriginalExtension();

    	$request->file->move('doctorimage',$imagename);

    	$doctor->image=$imagename; 
    	
    	$doctor->name=$request->name;  

    	$doctor->phone=$request->number;

    	$doctor->speciality=$request->speciality;  

    	$doctor->room=$request->room; 	


    	$doctor->save();

    	return redirect()->back()->with('message','Doctor added successfully');
    }
    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data=appointment::find($id);

        $data->status='Cancelled';

        $data->save();

        return redirect()->back();
    }

    public function admindoctors()
    {

        $data=doctor::all();
        return view('admin.doctors',compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);

        $data->delete();
        return redirect()->back()->with('message','Doctor details deleted successfully');;
    }

    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        
          
        $image=$request->file;
        if ($image) 
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('doctorimage',$imagename);

            $doctor->image=$imagename;

         }
        $doctor->save();

        return redirect()->back()->with('message','Doctor data updated successfully');
    }


    public function admindashboard()
    {
        return view('admin.admindashboard');
    }



    public function hospitals()
    {
       $data=hospital::all();
        return view('admin.hospitals',compact('data'));
    }


    public function uploadhospital(Request $request)
    {
       $hospital=new hospital;
        
        $hospital->name=$request->name;  

        $hospital->landmark=$request->landmark;  

        $hospital->doctor_in_charge=$request->doctor_in_charge;  

        $hospital->location=$request->location;

        $hospital->phone=$request->number;

        $hospital->email=$request->email;  

        $hospital->operating_hours_weekdays=$request->operating_hours_weekdays;  

        $hospital->operating_hours_weekend=$request->operating_hours_weekend;

        $hospital->specialist_services=$request->specialist_services;






        $hospital->save();

        return redirect()->back()->with('message','Hospital added successfully');
    }

    public function addhospital()
    {
        return view('admin.add_hospital');
    }

     public function deletehospital($id)
    {
        $data=hospital::find($id);

        $data->delete();
        return redirect()->back()->with('message','Hospital data deleted successfully');;
    }

    public function services()
    {
        return view('admin.services');
    }

    public function addpost()
    {
        return view('admin.add_post');
        
    }

    public function posts_news_and_articles()
    {
        $data=posts::all();
        return view('admin.posts_news_and_articles', compact('data'));
        
    }

    public function individualpost(Request $request, $id)
    {
        $data = posts::find($id);

        return view('admin.individualpost', compact('data'));
    }

    public function uploadpost(Request $request)
    {
        $post=new posts;
        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('postimage',$imagename);

        $post->image=$imagename; 
        
        $post->Category=$request->category;  

        $post->title=$request->title;

        $post->briefdescription=$request->briefdescription;  

        $post->content=$request->content;   

        $post->author=$request->author;

        $post->status='Under review';


        $post->save();

        return redirect()->back()->with('message','Post added successfully');
    }

    public function publish($id)
    {
        $data=posts::find($id);

        $data->status='published';

        $data->save();

        return redirect()->back();
    }

    public function decline($id)
    {
        $data=posts::find($id);

        $data->status='declined';

        $data->save();

        return redirect()->back();
    }


    public function deletepost($id)
    {
        $data=posts::find($id);

        $data->delete();
        return redirect()->back()->with('message','Post deleted successfully');
    }


    
    public function patients()
    {
        return view('admin.patients');
    }

    public function users()
    {
       $data=appointment::all();
        return view('admin.users', compact('data'));
    }

    public function invoices()
    {
        return view('admin.invoices');
    }

    public function addcareer()
    {
        return view('admin.add_career');
    }


    public function careers()
    {
        $data=career::all();
        return view('admin.careers',compact('data'));
    }

    public function uploadcareer(Request $request)
    {
        $career=new career;

        $career->title=$request->title;  

        $career->location=$request->location;

        $career->qualifications=$request->qualifications;  

        $career->email=$request->email;  

        $career->due_date=$request->due_date;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('careerimage',$imagename);

        $career->image=$imagename;

        $career->status='closed'; 


        $career->save();

        return redirect()->back()->with('message','Career details added successfully');
    }

    public function closecareer($id)
    {
        $data=career::find($id);

        $data->status='closed';

        $data->save();

        return redirect()->back();
    }

    public function opencareer($id)
    {
        $data=career::find($id);

        $data->status='opened';

        $data->save();

        return redirect()->back();
    }

   public function deletecareer($id)
    {
        $data=career::find($id);

        $data->delete();
        return redirect()->back()->with('message','Career deleted successfully');
    }

    public function updatecareer($id)
    {
        $data=career::find($id);
        return view('admin.update_career',compact('data'));
    }


     public function editcareer(Request $request, $id)
    {
         
          
       


        $career=career::find($id);

        $career->title=$request->title;  

        $career->location=$request->location;

        $career->qualifications=$request->qualifications;  

        $career->email=$request->email;  

        $career->due_date=$request->due_date;

         $image=$request->file;
        if ($image) 
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('careerimage',$imagename);

            $career->image=$imagename;

         }

        


        $career->save();

        return redirect()->back()->with('message','Career data updated successfully');
    }

}
