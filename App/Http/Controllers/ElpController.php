<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Career;

use App\Models\Posts;

class ElpController extends Controller
{
    public function addpost()
    {
        return view('elp.add_post');
        
    }

    public function elpdashboard()
    {
        return view('elp.elpdashboard');
        
    }

    public function viewcareer()
    {

    	 $careerstatus='opened';
         $career=career::where('status', $careerstatus)->get();
        return view('elp.viewcareer', compact('career'));
        
    }

     public function viewposts()
    {
    	$status='published';

    	$post= posts::where('status', $status)->get();
    	return view('elp.viewposts', compact('post'));
        
    }

}
