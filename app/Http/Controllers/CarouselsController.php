<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Carousel;

class CarouselsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$carousels = Carousel::orderBy('created_at','desc')->paginate(10);
        return view('carousel.index')->with('carousels', $carousels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);

        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/carousel', $fileNameToStore);
        }

        // Create Slider
        $carousel = new Carousel;
        $carousel->image = $fileNameToStore;
        $carousel->title = $request->input('title');
        $carousel->description = $request->input('description');
        $carousel->link = $request->input('link');
        $carousel->save();

        return redirect('/carousel')->with('success', 'Slider Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::find($id);        
        return view('carousel.edit')->with('carousel', $carousel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);

        // Create Slider
        $carousel = Carousel::find($id);
        $carousel->title = $request->input('title');
        $carousel->description = $request->input('description');
        $carousel->link = $request->input('link');

        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/carousel', $fileNameToStore);

            // Delete Image
            Storage::delete('public/carousel/'.$carousel->image);
            $carousel->image = $fileNameToStore;            
        }else {
            $fileNameToStore = $request->hasFile('old_image');
        }

        $carousel->save();

        return redirect('/carousel')->with('success', 'Slider Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);

        // Delete Image
        Storage::delete('public/carousel/'.$carousel->image);
        
        $carousel->delete();
        return redirect('/carousel')->with('success', 'Slider Removed');
    }
}
