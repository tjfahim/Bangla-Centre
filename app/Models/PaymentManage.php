<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentManage extends Model
{
    use HasFactory;

    protected $table = "payment_manages";

    protected $fillable = ['user_id', 'hall_manage_id', 'booking_manage_id', 'payment_type', 'status'];


    public function bookingmanage()
    {
        return $this->belongsTo(BookingManage::class);
    }


    public function hallmanages()
    {
        return $this->belongsTo(HallManage::class,'hall_manage_id','id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
