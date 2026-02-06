<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\UserFactory;

/**
 * @property string user_id
 * @property string email
 * @property string password
 * @property int fk_role_id
 * @property int|null fk_patient_id
 */
#[UseFactory(UserFactory::class)]
class User extends Model implements FilamentUser, AuthenticatableContract, HasName
{
    use Authenticatable, SoftDeletes, HasFactory;

    protected $primaryKey = 'user_id';
    public $fillable = ['fk_role_id', 'fk_patient_id', 'email', 'password'];
    public $timestamps = true;

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'fk_role_id');
    }

    public function dentist(): HasOne
    {
        return $this->hasOne(Dentist::class, 'fk_user_id');
    }
    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class, 'fk_user_id');

    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin' && $this->fk_role_id === 2) {
            return true;
        }
        return false;
    }

    public function getUserName(): string
    {
        return "{$this->attributes['first_name']} {$this->attributes['last_name']}";
    }

    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
