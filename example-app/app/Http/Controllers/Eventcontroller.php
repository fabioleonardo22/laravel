<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;


class Eventcontroller extends Controller
{

   public function index() {

    $search = request('search');

    if($search) {

        $events = Event::where([
            ['title', 'like', '%'.$search.'%']
        ])->get();

      }  else {
           $events = Event::all();
        }


    return view('welcome',['events' => $events, 'search' => $search]);

   }

   public function create () {
       return view('events.create');
   }

   public function store(Request $request) {

     //var_dump($request->Private); die;
     $event = new Event;

     $event->title = $request->title;
     $event->date = $request->date;
     $event->city = $request->city;
     $event->private = $request->private;
     $event->description = $request->description;
     $event->items = $request->items;
     $event->image = $request->image;

     // image upload
     if($request->hasfile('image') && $request->file('image')->isvalid()) {

         $requestimage = $request->image;

         $extension = $requestimage->extension();

         $imagename = md5($requestimage->getclientoriginalname() . strtotime("now")) . "." . $extension;

         $request->image->move(public_path('img/events'), $imagename);

         $event->image = $imagename;

     }

     $user  = auth()->user();
     $event->user_id = $user->id;


     $event->save();

     return redirect('/')->with('msg', 'evento criado com sucesso!');

   }

    public function show($id) {

        $event = Event::findorfail($id);

        $eventowner = User::where('id', $event->user_id)->first()->toarray();

        return view('events.show', ['event' => $event, 'eventowner' => $eventowner]);

    }

    public function dashboard() {

        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }
}

