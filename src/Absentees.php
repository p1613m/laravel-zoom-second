<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Absentees extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/absentees';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'absentees';
}
