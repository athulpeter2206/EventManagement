<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Login_Table extends Model
{
    public $table = 'user_login';
    public $primaryKey = 'U_Id';
    public $incrementing = true;
    public $timestamps=false;
    
}
