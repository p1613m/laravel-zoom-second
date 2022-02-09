<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Instance extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/instances';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'instances';
}
