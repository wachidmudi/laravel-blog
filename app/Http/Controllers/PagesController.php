<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Agenda;
use App\Carousel;
use App\Download;
use App\Post;
use App\Profile;
use App\Gallery;
use App\Calendar;

class PagesController extends Controller
{
    public function __construct()
    {
      // Sharing data into multiple blade view
      $articles = Post::orderBy('created_at','desc')
                        ->limit(6)
                        ->get();        
      $carousels = Carousel::all();
      $agendas = Agenda::orderBy('created_at','desc')
                        ->limit(6)
                        ->get();
      $downloads = Download::orderBy('created_at','desc')
                        ->limit(3)
                        ->get();
      $calendars = Calendar::orderBy('created_at','desc')
                        ->limit(2)
                        ->get();                                                                  

      // Using View
      View::share('articles', $articles);
      View::share('carousels', $carousels);
      View::share('agendas', $agendas);
      View::share('downloads', $downloads);
      View::share('calendars', $calendars);
    } 

    public function index(){
        return view('pages.index');
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    /**
     * Custom Route for Index PASCA
     */  
    public function blog($slug)
    {
        $blog = Post::where('slug', $slug)->firstOrFail();
        return view('pages.blog')->with('blog', $blog);
    } 

    public function blogList()
    {
        $blogs = Post::orderBy('created_at','desc')->paginate(4);
        return view('pages.blog_list')->with('blogs', $blogs);
    }

    public function agenda($slug)
    {
        $agenda = Agenda::where('slug', $slug)->firstOrFail();
        return view('pages.agenda')->with('agenda', $agenda);
    } 

    public function agendaList()
    {
        $agendas = Agenda::orderBy('created_at','desc')->paginate(4);
        return view('pages.agenda_list')->with('agendas', $agendas);
    }

    public function download($slug)
    {
        $download = Download::where('slug', $slug)->firstOrFail();
        return view('pages.download')->with('download', $download);
    } 

    public function downloadList()
    {
        $downloads = Download::orderBy('created_at','desc')->paginate(4);
        return view('pages.download_list')->with('downloads', $downloads);
    }

    public function profileList()
    {
        $profiles = Profile::orderBy('created_at','desc')->paginate(10);
        return view('pages.profile_list')->with('profiles', $profiles);
    }

    public function galleryList()
    {
        $galleries = Gallery::orderBy('created_at','desc')->paginate(10);
        return view('pages.gallery_list')->with('galleries', $galleries);
    }    

    /*
     *  Redirect user to not found page instead showing chunk of error code
     */  
    public function pageNotFound()
    {
        return view('errors.404');
    }

}
