<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;
use App\Agenda;
use App\Carousel;
use App\Download;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // $posts = $user->posts()->paginate(5);

        $posts = Post::orderBy('created_at','desc')->take(5)->get();
        $agendas = Agenda::orderBy('created_at','desc')->take(5)->get();
        $downloads = Download::orderBy('created_at','desc')->take(5)->get();
        $carousels = Carousel::orderBy('created_at','desc')->take(5)->get();

        return view('dashboard')->with(compact('posts', 'agendas', 'downloads', 'carousels'));
    }
}
