<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    public function getIndex(){
      $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
       return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout(){
    	$name = "Assane Muarucha";
    	$email = "uem.assane@gmail.com";
    	$data =[];
    	$data['name'] = $name;
    	$data['email']= $email;

    	return view('pages.about')->withData($data);
    }
    public function getContact(){
    	return view('pages.contact');
    }
}
