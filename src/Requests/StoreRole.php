<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class StoreRole extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'required|string|max:128',
        'description' => 'required|string|max:128',
        'privileges' => 'required|array',
    ];
}