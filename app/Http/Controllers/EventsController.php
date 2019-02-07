<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('events.index')->with('events', $events);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Group;
        $event->name = $request->name;
        $event->about = $request->about;
        $event->private = $request->private;
        $event->owner_id = Auth::id();
        $event->save();

        return redirect('/events')->with('success', 'Utworzono grupę.');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show')->with('event', $event);
    }
}
