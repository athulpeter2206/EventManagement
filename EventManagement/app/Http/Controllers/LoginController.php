<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Login_Table;

class LoginController extends Controller
{
    function loginCheck(){

    }
    function loginCapture(Request $request){
        $Uname = $request->input('Uname');
        $Pass = $request->input('PassW');
        $type=2;
        $passDB=User_Login_Table::where('UserName', $Uname)->first(['Password']);
        $userTypeDB=User_Login_Table::where('UserName', $Uname)->first(['User_type']);
        // echo $passDB;
        // echo $Pass;
        // echo $userTypeDB;
        // echo $passDB->Password;
        if($passDB->Password==$Pass && $userTypeDB->User_type==$type){
            echo "UserName Matches";
            console.log("User login");
            return redirect('/DashboardUser');
            // return view('EventViews/DashboardUser'); 
        }else if($passDB->Password==$Pass && $userTypeDB->User_type==2){
            return redirect('/DashboardAdmin');
        }
        //$isInsertSuccess = User_Login_Table::insert(['UserName'=>Uname,'Password'=>PassW]);
    }
}
