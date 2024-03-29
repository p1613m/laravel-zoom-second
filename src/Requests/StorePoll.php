<?php

namespace p1613m\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class StorePoll extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'nullable|string',
    ];

    protected $relatedResource = [
        "questions" => StorePollQuestion::class,
    ];
}
