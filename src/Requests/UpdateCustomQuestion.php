<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateCustomQuestion extends PersistResource
{
    protected $persistAttributes = [
        "title" => "nullable|string",
        "type" => "nullable|string|in:short,single",
        'required' => 'nullable|boolean',
        'answers' => 'nullable|array',
    ];
}
