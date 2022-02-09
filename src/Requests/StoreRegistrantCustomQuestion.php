<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class StoreRegistrantCustomQuestion extends PersistResource
{
    protected $persistAttributes = [
        "title" => "nullable|string",
        "value" => "nullable|string",
    ];
}
