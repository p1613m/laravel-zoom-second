<?php

namespace p1613m\Zoom\Support;

use MacsiDigital\API\Support\ApiResource;

class Model extends ApiResource
{
    protected $apiDataField = '';

    protected $dateFormat = \DateTime::ATOM;
}
