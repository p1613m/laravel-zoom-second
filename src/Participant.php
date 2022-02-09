<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Participant extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/participants';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'participants';
}
