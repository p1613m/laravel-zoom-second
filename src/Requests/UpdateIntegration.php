<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateIntegration extends PersistResource
{
    protected $persistAttributes = [
        "linkedin_sales_navigator" => "nullable|boolean",
    ];
}
