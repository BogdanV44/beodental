<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Availability extends Model
{
    protected $primaryKey = 'availability_id';

    protected $fillable = [
        'fk_dentist_id',
        'from_date',
        'to_date',
        'description',
    ];

    // Relationships //
    public function dentist() : BelongsTo
    {
        return $this->belongsTo(Dentist::class, 'fk_dentist_id');
    }
    // Relationships End //

}
