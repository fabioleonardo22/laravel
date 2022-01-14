<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;


class Eventcontroller extends Controller
{

   public function index() {

    $events = Event::all();

    return view('welcome',['events' => $events]);

   }

   public function create () {
       return view('events.create');
   }

   public function store(Request $request) {

     //var_dump($request->Private); die;
     $event = new Event;

     $event->title = $request->title;
     $event->city = $request->city;
     $event->private = $request->private;
     $event->description = $request->description;

     // image upload
     if($request->hasfile('image') && $request->file('image')->isvalid()) {

         $requestimage = $request->image;

         $extension = $requestimage->extension();

         $imagename = md5($requestimage->getclientoriginalname() . strtotime("now")) . "." . $extension;

         $request->image->move(public_path('img/events'), $imagename);

         $event->image = $imagename;
     }

     $event->save();

     return redirect('/')->with('msg', 'evento criado com sucesso!');

   }

    public function show($id) {

        $event = Event::findorfail($id);

        return view('events.show', ['event' => $event]);

    }
}

