<?php

namespace p1613m\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class StoreAssistant extends PersistResource
{
    protected $persistAttributes = [
        'id' => '',
        'email' => 'nullable|email',
    ];
}
