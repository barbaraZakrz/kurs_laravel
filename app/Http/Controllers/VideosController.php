<?php

namespace App\Http\Controllers;

use Request;
use App\Video; 
use App\Category;
use App\Http\Requests\CreateVideoRequest;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class VideosController extends Controller
{
    //*Pobieramy liste filmow
    public function index()
    {
    	$videos = Video::latest()->get();
    	return view('videos.index')->with('videos', $videos);
    }

    //metoda jeden film
    public function show($id)
    {
    	$video = Video::findOrFail($id);
    	return view('videos.show')->with('video', $video);
    }


// wyswietla formularz dodawania filmu
    public function create()
    {
    	return view('videos.create');
    }

    //Zapisuje film do tabeli

    public function store(CreateVideoRequest $request)
    {
        Video::create($request->all());
        return redirect('videos');
    }

    //Formularz edycji filmu

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.edit')->with('video', $video);
    }
    //Aktualizacja filmu 

    public function update($id, CreateVideoRequest $request)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        return redirect('videos');
    }


}

