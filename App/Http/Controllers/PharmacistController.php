<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

use App\Models\Result;

class PharmacistController extends Controller
{
    public function pharmacisthome()
    {
        return view('pharmacist.pharmacisthome');
        
    }

    public function pharmacistpatients()
    {
       $data=patient::all();
        return view('pharmacist.pharmacistpatients', compact('data'));
        
    }

    public function pharmacistmedicine()
    {
        $status='Not given';
        $data=result::where('medicinestatus', $status)->get();
        return view('pharmacist.pharmacistmedicine', compact('data'));
        
    }

    public function givemedicine($id)
    {
        $data=result::find($id);

        $data->medicinestatus='Given';

        $data->save();

        return redirect()->back();
    }


}
