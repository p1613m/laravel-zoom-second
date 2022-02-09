<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class RegistrationQuestion extends Model
{
    protected $insertResource = 'MacsiDigital\Zoom\Requests\UpdateRegistrationQuestion';

    protected $endPoint = 'meetings/{meeting:id}/registrants/questions';

    protected $allowedMethods = ['get', 'patch'];

    protected $createMethod = 'patch';

    protected $apiMultipleDataField = '';

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function customQuestions()
    {
        return $this->hasMany(CustomQuestion::class);
    }
}
