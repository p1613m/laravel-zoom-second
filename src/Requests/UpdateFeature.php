<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateFeature extends PersistResource
{
    protected $persistAttributes = [
        "meeting_capacity" => "nullable|numeric",
        "large_meeting" => "nullable|boolean",
        "large_meeting_capacity" => "nullable|numeric",
        "webinar" => "nullable|boolean",
        "webinar_capacity" => "nullable|numeric",
        "zoom_phone" => "nullable|boolean",
    ];
}