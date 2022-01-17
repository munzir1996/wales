<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function locals()
    {
        return $this->hasMany(Local::class);
    }

    public function basicInformations()
    {
        return $this->hasMany(BasicInformation::class);
    }
}
