<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurgeryChair extends Model
{
    protected $primaryKey = 'surgery_chair_id';
    protected $fillable = ['number_of_chairs'];
    public $timestamps = true;
}
