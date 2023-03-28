<?php

namespace App\Http\Controllers;
use App\Models\user_details;
use App\Models\User_Login_Table;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function registerUsertoDB(Request $req)
    {

        $Fname = $req->input('FirstName');
        $Sname = $req->input('SecondName');
        $address = $req->input('addresstxt');
        $email = $req->input('emailtxt');
        $mobileNo = $req->input('mobileNotxt');
        $gender = $req->input('genderOption');
        $pass = $req->input('passwordtxt');
        $usertype=2;
        $isInsertSuccess1 = user_details::insert(['First_Name'=>$Fname,
        'Second_Name'=>$Sname,
        'Address'=>$address,
        'Email'=>$email,
        'Mobile_No'=>$mobileNo,
        'Gender'=>$gender]);

        $isInsertSuccess2 = User_Login_Table::insert(['UserName'=>$email,'Password'=>$pass,'User_type'=>$usertype]);

        if($isInsertSuccess1 && $isInsertSuccess2){
            echo '<h1>User Register Success</h1>';
            return redirect('/RegisterSuccess');
        }
        else{
            echo '<h1>Unable to register User</h1>';
        }

    }
}
