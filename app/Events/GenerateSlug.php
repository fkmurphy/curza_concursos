<?php

namespace App\Events;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Broadcasting\InteractsWithSockets;
//use Illuminate\Queue\SerializesModels;

class GenerateSlug extends Event
{

    public $model;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
