<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateTrackingField extends PersistResource
{
    protected $persistAttributes = [
        "field" => "nullable|string",
        "value" => "nullable|string",
    ];
}
