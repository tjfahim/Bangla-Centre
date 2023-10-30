<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = "dashboards";

    protected $fillable = ['booked_date', 'hall', 'period', 'booking_type', 'price', 'discount', 'description', 'image', 'name', 'email', 'phone', 'address', 'comment', 'total_paid'];
}
