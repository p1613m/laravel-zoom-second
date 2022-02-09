<?php

namespace p1613m\Zoom;

use p1613m\API\Support\Resource;

class PollResult extends Resource
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/polls';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
