<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static firstOrCreate(array $service)
 */
class Service extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'service_id';

    protected $fillable = [
        'fk_category_id',
        'name',
        'description',
        'order',
        'additional_description',
        'price',
        'is_able_for_reservation',
        'is_active'
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class, 'fk_category_id');
    }
}
