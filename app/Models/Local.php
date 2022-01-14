<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Local extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Get all of the regions for the Local
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
}
