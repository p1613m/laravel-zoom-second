<?php

namespace p1613m\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class StoreTrackingField extends PersistResource
{
    protected $persistAttributes = [
        "field" => "nullable|string",
        "value" => "nullable|string",
    ];
}
