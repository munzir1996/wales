<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait FilesTrait
{

    public function uploadFiles($files, $mediaCollection)
    {
        foreach ($files as $file) {
            $this->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection($mediaCollection);
        }
    }

}

