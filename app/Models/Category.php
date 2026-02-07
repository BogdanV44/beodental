<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'order',
    ];

    public $timestamps = false;

    public function services() : HasMany
    {
        return $this->hasMany(Service::class, 'fk_service_id');
    }
}
