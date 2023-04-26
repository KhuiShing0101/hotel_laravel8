<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\View;
use App\Models\Bed;

class Room extends Model
{
    use HasFactory;
    protected $table    = 'room';
    protected $fillable = [
        'name',
        'type',
        'occupancy',
        'bed_id',
        'size',
        'view_id',
        'description',
        'detail',
        'price_per_day',
        'extra_price_per_day',
        'thumbnail',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_by',
        'deleted_at',
    ];

    public function getView(): BelongsTo
    {
        return $this->belongsTo
        (
            View::class,
            'view_id',
            'id'
        );
    }
    public function getBed(): BelongsTo
    {
        return $this->belongsTo

        (
            Bed::class,
            'bed_id',
            'id'
        );
    }
}
