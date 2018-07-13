<?php

namespace App\Http\Controllers;

use App\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    protected $fillable =[
        'name', 'location', 'start_date', 'end_date', 'description',
    ];
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $events = \DB::table('events')
                    ->where('events.user_id','=', $user->id)
                    ->get();

        foreach ($events as $event) {
            echo $event->name;
            echo $event->location;
            echo $event->start_date;
            echo $event->end_date;
            echo $event->description;
            echo "<br>";
        }
    }

    public function create(){
        return view('test.create_event',Auth::user());
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'=>'required|max:255',
            'location' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ));

        $user = Auth::user();
        $event = new Event([
        'user_id'  => $request->get($user->id),
        'name' => $request->get('name'),
        'location' => $request->get('location'),
        'start_date' => $request->get('start_date'),
        'end_date' => $request->get('end_date'),
        'description' => $request->get('description'),
        ]);
        $event->save();
        return redirect('/'.Auth::user()->username);

    }

    public function show($id){

    }

    public function delete($id){

    }

    public function update(Request $request){

    }

}
