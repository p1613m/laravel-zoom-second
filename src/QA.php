<?php

namespace p1613m\Zoom;

use p1613m\API\Support\Resource;

class QA extends Resource
{
    protected $endPoint = '/past_meetings/{meeting:uuid}/qa';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
