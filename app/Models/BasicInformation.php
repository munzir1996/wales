<?php

namespace App\Models;

use App\Traits\FilesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BasicInformation extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes, InteractsWithMedia, FilesTrait;

    protected $guarded = [];
    protected $cascadeDeletes = ['well'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function well()
    {
        return $this->hasOne(Well::class);
    }

    // public function projectManager()
    // {
    //     return $this->belongsTo(ProjectManager::class);
    // }
}
