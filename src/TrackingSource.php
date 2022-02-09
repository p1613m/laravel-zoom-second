<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class TrackingSource extends Model
{
    protected $endPoint = '/webinars/{webinar:id}/tracking_sources';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = '';
}
