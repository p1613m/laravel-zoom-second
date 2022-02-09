<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateAssistant extends PersistResource
{
    protected $persistAttributes = [
        'id' => '',
        'email' => 'nullable|email',
    ];
}
