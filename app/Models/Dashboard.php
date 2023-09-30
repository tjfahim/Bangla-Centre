<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = "dashboards";

    protected $fillable = ['check_in_date', 'check_out_date', 'hall', 'period', 'start_time', 'end_time', 'booking_type', 'price', 'discount', 'description', 'image', 'name', 'email', 'phone', 'address', 'comment', 'total_paid'];
}
