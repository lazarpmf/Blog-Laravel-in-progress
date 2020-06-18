<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function first(){
    	
    	$assocArray=array('title' => 'About' ,
    						  'about' => 'This is the about page from assoc array from PagesController.',
    						  'services' => ['web design', 'programming', 'maths']
    		 );
    	return view('start')->with($assocArray);
    }


}
