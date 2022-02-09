<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateLiveStreamStatus extends PersistResource
{
    protected $persistAttributes = [
        "action" => "required|in:start,stop",
    ];

    protected $relatedResource = [
        "settings" => UpdateLiveStreamStatusSetting::class,
    ];
}
