<?php

namespace App\Http\Controllers;   
use App\Post;    

class PagesController extends Controller{
    
    public function getIndex(){

    	# process variable data or params
    	# talk to the model 
    	# receive from the model
    	# compile and process data from the model if needed.
    	# pass the data to the correct view    

        $posts = Post::orderBy('created_at','desc')->take(4)->get();   
    	return view('pages.welcome')->withPosts($posts);           
    }

    public function getAbout(){ 

    	$first = "Om";
    	$last = "Raj Purohit";
    	$fullname = $first." ".$last;     
    	$email = "weoneall.om@gmail.com"; 

    	$data = []; 
    	$data['email'] = $email;
    	$data['fullname'] = $fullname;  
 
    	return view('pages.about')->withData($data);         

    }

    public function getContact(){

    	return view('pages.contact');       
    }

    public function postContact(){

    }






}


?>