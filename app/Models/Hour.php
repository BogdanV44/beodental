<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hour extends Model
{
    protected $primaryKey = 'hour_id';

    // Relationships //
    public function appointment() : BelongsToMany
    {
        return $this->belongsToMany(Appointment::class);
    }
    // Relationships End //

}
