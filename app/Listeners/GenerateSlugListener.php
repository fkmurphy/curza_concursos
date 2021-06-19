<?php

namespace App\Listeners;

use App\Events\GenerateSlug;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Queue\InteractsWithQueue;

class GenerateSlugListener
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\ExampleEvent  $event
     * @return void
     */
    public function handle(GenerateSlug $event)
    {
        $slugExists = true;
        $baseName = $event->model->name;
        while ($slugExists) {
            $slug = slug($baseName);

            // check slug
            $countSlugs = get_class($event->model)::where('code', 'like', $slug)->count();
            if ($countSlugs == 0) {
                $slugExists = false;
            } else {
                $baseName .= '-' . ($countSlugs + 1);
            }
        }
        $event->model->code = $slug;
    }
}
