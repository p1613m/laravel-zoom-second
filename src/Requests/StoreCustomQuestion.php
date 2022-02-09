<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class StoreCustomQuestion extends PersistResource
{
    protected $persistAttributes = [
        'title' => 'required|string',
        'value' => 'required|string',
    ];
}
