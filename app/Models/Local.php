<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Local extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $guarded = [];
    protected $cascadeDeletes = ['regions', 'basicInformations'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function basicInformations()
    {
        return $this->hasMany(BasicInformation::class);
    }
}
