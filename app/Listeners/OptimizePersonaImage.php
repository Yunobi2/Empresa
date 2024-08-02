<?php

namespace App\Listeners;

use App\Events\PersonaSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizePersonaImage Implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(PersonaSaved $event): void
    {
        $persona = $event->persona;

        if ($persona->image) {
            $image = Image::make(Storage::get($persona->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();

            Storage::put($persona->image, (string) $image);
        }
    }
}