<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event_register extends Model
{
    use HasFactory;
    public $table='event_register';
    public $primaryKey ='event_reg_id';
    public $incrementing=true;
    public $timestamps=false;
}
