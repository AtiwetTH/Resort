<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempBooking extends Model
{
    use HasFactory;

    protected $table = 'temp_bookings';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
