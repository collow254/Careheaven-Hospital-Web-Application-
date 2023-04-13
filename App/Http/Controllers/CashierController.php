<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

use App\Models\Visit;

use App\Models\Bill;

class CashierController extends Controller
{

	public function cashierhome()
    {
    	 
        return view('cashier.cashierhome');
        
    }


    public function cashierpatients()
    {
    	 $data=patient::all();
        return view('cashier.cashierpatients', compact('data'));
        
    }



    public function cashierpayments()
    {
        $status='Not paid';
        $data=bill::where('paymentstatus', $status)->get();
        return view('cashier.cashierpayments', compact('data'));
        
    }

    public function cashierreceipts()
    {
        $status='Paid';
        $data=bill::where('paymentstatus', $status)->get();
        return view('cashier.cashierreceipts', compact('data'));
        
    }

    public function cashpatientbill(Request $request, $id)
    {
        
        $data=bill::where('patientId', $id)->get();
        return view('cashier.cashierpayments', compact('data'));
        
    }



}
