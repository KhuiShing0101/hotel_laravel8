<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Room;

class View extends Model
{
    use HasFactory;
    protected $table    = 'view';
    protected $fillable = [
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
         // In only 1 view's id has many room's view_id
         // So View Model has local key 'id' and foreign key 'view_id'
         // This function is for get Room's property base on view_id'
        return $this->hasMany(Room::class,'view_id','id',);

    }

}
