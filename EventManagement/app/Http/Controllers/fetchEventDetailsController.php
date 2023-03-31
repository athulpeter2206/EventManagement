<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event_register;

class fetchEventDetailsController extends Controller
{
    //
    function showEvent(){
        $data = event_register::all();
        return view('EventViews/DashboardAdmin',compact('data'));

    }
}
