<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessHour extends Model
{
    protected $primaryKey = 'business_hour_id';
    protected $fillable = ['day', 'from_hour_id', 'to_hour_id', 'is_work_day'];
}
