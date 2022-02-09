<?php

namespace p1613m\Zoom\Requests;

use p1613m\API\Support\PersistResource;

class UpdateRegistrationQuestion extends PersistResource
{
    protected $relatedResource = [
        "questions" => UpdateQuestion::class,
        "custom_questions" => UpdateCustomQuestion::class,
    ];
}
