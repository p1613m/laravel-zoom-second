<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Invitation extends Model
{
    protected $endPoint = 'meetings/{meeting:id}/invitation';

    protected $allowedMethods = ['get'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'invitation';
}
