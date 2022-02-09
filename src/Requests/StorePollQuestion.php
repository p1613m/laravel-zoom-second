<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class StorePollQuestion extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'nullable|string',
        'type' => 'nullable|in:single,multiple',
        'answers' => 'nullable|array',
    ];
}
