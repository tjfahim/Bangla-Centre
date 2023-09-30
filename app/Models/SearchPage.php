<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchPage extends Model
{
    use HasFactory;

    protected $table = "search_pages";

    protected $fillable = ['check_in_date', 'check_out_date', 'hall', 'period', 'start_time', 'end_time', 'booking_type', 'price', 'description', 'image','discount'];
}
