<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateGlobalDialInCountry extends PersistResource
{
    protected $persistAttributes = [
        "city" => "nullable|string",
        "country" => "nullable|string",
        "country_name" => "nullable|string",
        "number" => "nullable|string",
        "type" => "nullable|in:toll,tollfree",
    ];
}