<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bed extends Model
{
    use HasFactory;
    protected $table    = 'bed';
    protected $fillable =[
        'name',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_by',
        'deleted_at',
    ];
    public function getRoom(): HasMany
    {
        return $this->hasMany(Room::class,'bed_id','id');
    }

}
