<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactInfo;
use App\Models\Post;
use App\Models\Gym;
use App\Models\User;
use App\Models\Quote;
use App\Models\Landing;

use App\Http\Controllers\UserController;


class PageController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $quotes = Quote::all();
        return view('gm.index', compact('posts' , 'quotes'))->with('menuOption', 'I');
    }

    public function Sobrenos(){
        $users = User::where('role', 'A')->get();
        //return view('users.list', compact('users'));
        return view ('gm.Sobrenos', compact('users'))->with('menuOption', 'B');
    }

    public function gym(){
        $gyms = Gym::all();
        return view ('gm.gym', compact('gyms'))->with('menuOption', 'C');
    }

    public function blog(){
        $posts = Post::all();
        
        return view ('gm.blog', compact('posts'))->with('menuOption', 'D');
    }

    public function contact(){
        return view ('gm.contact')->with('menuOption', 'E');
    }
    public function login(){
        return view ('login')->with('menuOption', 'F');
    }

    public function register(){
        return view ('register');
    }

    public function faq(){
        return view ('gm.faq')->with('menuOption','G');
    }

    public function landing(){
        $landing = landing::all();
        return view ('gm.landing', compact('landing'))->with('menuOption','S');
    }


    public function contactSendEmail(Request $request){
        Mail::to($request->email)->send(new ContactInfo($request));
    }


}
