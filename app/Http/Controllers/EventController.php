<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\has_category;
use App\has_image;
use App\has_register;
use App\image;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;
        $events = Event::where("id_user", $id_user)->get();
        $user = Auth::user();
        // dd($events);
        return view("page.dashboard.event.main", compact("events", "user"));
    }

    public function create()
    {
        $user = Auth::user();
        $categories = Category::get();
        return view("page.dashboard.event.input", compact("user", "categories"));
    }

    public function store(Request $request)
    {
        

        $this->validate($request, [
            "name" => "required",
            "desc" => "required",
            "day" => "required",
            "month" => "required",
            "year" => "required",
            "time_date" => "required",
            "category" => "required",
            "image" => "required",
            "cp1" => "required",
        ]);

        $date = $request['day']."-".$request['month']."-".$request['year']." ".$request['time_date'];
        $dtime = DateTime::createFromFormat("d-M-Y H:i", $date);
        $timestamp = $dtime->getTimestamp();
        $date = date('Y-m-d H:i:s', $timestamp);
        $currentDate = date('Y-m-d H:i:s');
        // dd($date, $currentDate, );
        $active = 0;
        $user = Auth::user();
        if ($date < $currentDate) {
            $active = 1;
        }
        $event = Event::create([
            'name' => $request['name'],
            'desc' => $request['desc'],
            'active' => $active,
            'start_event' => $date,
            'cp1' => $request['cp1'],
            'cp2' => $request['cp2'],
            'social' => $request['social'],
            'location' => $request['location'],
            'id_user' => $user->id,
        ]);

        has_category::create([
            "id_event" => $event->id,
            "id_category" => $request['category']
        ]);

        if ($request->file('image') != null) {
            $path = $request->file('image')->store('events', 'public');
            $img = image::create([
                'image' => $path
            ]);
    
            has_image::create([
                "id_event" => $event->id,
                "id_image" => $img->id
            ]);
        }

        session()->flash('success', 'Create event was successfull');
        return back();
    }

    public function detail(Event $event)
    {
        $t = explode(":", explode(" ", $event->start_event)[1]);
        $time = $t[0].":".$t[1];
        $date = explode(" ", $event->start_event)[0];

        return view("page.dashboard.event.detail", compact("event", "time", "date"));
    }

    public function destroy($id)
    {
        Event::destroy($id);

        $events = Event::get();
        // dd($events);
        return view("page.dashboard.event.main", compact("events"));
    }

    public function finished(Event $event)
    {
        $event->update([
            "active" => "2"
        ]);

        $user = Auth::user();
        $events = Event::where("id_user", $user->id)->get();
        return view("page.dashboard.event.main", compact("events", "user"));
    }

    public function show_all()
    {
        $events = Event::paginate(20);
        return view("page.dashboard.event.all_event", compact("events"));
    }

    public function search(Request $request)
    {
        $seacrh = $request->search;
        $events = Event::where('name', 'like', "%".$seacrh."%")->paginate(20);
        return view("page.dashboard.event.all_event", compact("events"));
    }

    public function register(Request $request)
    {
        $id_event = $request['id_event'];
        $id_user = Auth::user()->id;
        has_register::create([
            "id_event" => $id_event,
            "id_user" => $id_user
        ]);
        session()->flash('success', 'Register was successfull');
        return back();
    }
}
