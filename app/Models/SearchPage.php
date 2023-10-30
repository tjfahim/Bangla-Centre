<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchPage extends Model
{
    use HasFactory;

    protected $table = "search_pages";

    protected $fillable = ['booked_date', 'hall', 'period', 'booking_type', 'price', 'description', 'image','discount'];
}
