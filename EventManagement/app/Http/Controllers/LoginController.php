<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Login_Table;
use App\Models\user_details;

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
        
        if($passDB->Password==$Pass && $userTypeDB->User_type==$type){
            echo "UserName Matches";
            
            $st = user_details::where('Email',$Uname)->first(['User_Id']);
            $data1 = ["userId" => $st->User_Id];
            $st2 = user_details::where('Email',$Uname)->first(['First_Name']);
            $data2 = ["userName" => $st2->First_Name];

            $AllData = $request->input();
            $request->session()->put('User',$AllData['Uname']);
            
            
            // console.log("User login");
            // return redirect('/DashboardUser');
            return view('EventViews/DashboardUser', $data1,$data2); 
        }else if($passDB->Password==$Pass && $userTypeDB->User_type==1){
            return redirect('/DashboardAdmin');
        }
        function redirectDashboard(){
            return view('EventViews/DashboardUser', $data1,$data2);
        }
    
    }
}
