<?php

namespace App\Models;

use App\Models\User;
use App\Models\HallManage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingManage extends Model
{
    use HasFactory;

    public function hallmanages()
    {
        return $this->belongsTo(HallManage::class,'hall_manage_id','id');
    }

 
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
