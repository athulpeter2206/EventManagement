<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    use HasFactory;
    public $table='user_details';
    public $primaryKey ='User_Id';
    public $incrementing=true;
    public $timestamps=false;
    // protected $fillable =['First_Name','Second_Name','Addredd','Email','Mobile_No','Gender'];
}
