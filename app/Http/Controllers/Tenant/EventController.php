<?php

namespace App\Http\Controllers\Tenant;

use App\Event;
use App\EventList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function index()
    {
        return 'List of events';

        return view('site.events', [
            'events' => $events,
            'eventList' => $eventList,
        ]);
    }

    public function show()
    {
        return 'Show single event';
//        dd(func_get_args());

        return view('site.event', [
            'event' => $event,
            'eventList' => $eventList,
        ]);
    }
}
