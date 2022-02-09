<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateTsp extends PersistResource
{
    protected $persistAttributes = [
        "call_out" => "nullable|boolean",
        "call_out_countries" => "nullable|array",
        "show_international_numbers_link" => "nullable|boolean",
    ];
}
