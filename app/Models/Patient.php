<?php

namespace App\Models;

use Database\Factories\PatientFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int patient_id
 * @property string first_name
 * @property string last_name
 * @property string phone
 * @property string email
 * @property int|null fk_user_id
 */
#[UseFactory(PatientFactory::class)]
class Patient extends Model
{
    use SoftDeletes, HasFactory;

    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'fk_user_id',
        'first_name',
        'last_name',
        'phone',
        'email'
    ];


    function appointments() : BelongsToMany
    {
        return $this->belongsToMany(Appointment::class, 'fk_patient_id');
    }
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'fk_user_id');
    }

    public function getFullNameAttribute() : string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
