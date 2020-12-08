<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pending_events;
use App\Sid;

class PendingEventsController extends Controller
{
    //
    public function index(){

    	$event = Pending_events::all();

    	return view('UI.rulepage3', compact('event')); 
    }
}
