<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasicInformation extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(state::class);
    }

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function projectManager()
    {
        return $this->belongsTo(ProjectManager::class);
    }
}
