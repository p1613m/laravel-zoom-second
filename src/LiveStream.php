<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class LiveStream extends Model
{
    protected $endPoint = 'meetings/{meeting:id}/livestream';

    protected $allowedMethods = ['put'];

    protected $apiMultipleDataField = '';
}
