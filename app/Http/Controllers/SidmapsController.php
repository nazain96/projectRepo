<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Sid;

class SidmapsController extends Controller
{
    //
    public function store(Request $request){

    	$sid = new Sid;

		$sid->technique_name = $request->technique_name;
    	$sid->threat_name = $request->threat_name;
        $sid->threat_class = $request->threat_class;
        $sid->severity = $request->threat_severity;

    	$sid->save();

    	return redirect(route('UI.rulepage3'))->with('successMsg', 'Rules Successfully Generated');
    }
}
