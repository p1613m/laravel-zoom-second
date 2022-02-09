<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class StorePanelist extends PersistResource
{
    protected $persistAttributes = [
        "email" => "nullable|email",
        "name" => "required|string|max:64",
    ];
}
