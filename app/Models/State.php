<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class State extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $guarded = [];
    protected $cascadeDeletes = ['locals', 'basicInformations'];

    public function locals()
    {
        return $this->hasMany(Local::class);
    }

    public function basicInformations()
    {
        return $this->hasMany(BasicInformation::class);
    }
}
