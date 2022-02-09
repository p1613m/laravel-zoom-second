<?php

namespace p1613m\Zoom\Support;

use p1613m\API\Support\ApiResource;

class Model extends ApiResource
{
    protected $apiDataField = '';

    protected $dateFormat = \DateTime::ATOM;
}
