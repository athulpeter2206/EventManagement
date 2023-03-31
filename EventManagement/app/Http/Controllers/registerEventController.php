<?php

namespace App\Http\Controllers;
use App\Models\event_register;
use Illuminate\Http\Request;

class registerEventController extends Controller
{
    function registerEvent(Request $req){
        $EventType = $req->input('Eventtype');
        $Purpose = $req->input('eventPurpose');
        $Location = $req->input('eventLocation');
        $Description = $req->input('eventDescription');
        $EventDate = $req->input('eventDate');
        $UserId = $req->input('userId');
        $isInsertSuccess = event_register::insert(['Event_type'=>$EventType,
        'User_Id'=>$UserId,
        'Description'=>$Description,
        'Location'=>$Location,
        'Purpose'=>$Purpose,
        'Date'=>$EventDate]);
        echo($EventType);
        echo($UserId);
        echo($Description);
        echo($Location);
        echo($Purpose);
        echo($EventDate);
        if($isInsertSuccess){
            echo '<h1>User Register Success</h1>';
            return redirect('/RegisterEventSuccess');
        }
        else{
            echo '<h1>Unable to register User</h1>';
        }
    }
}
