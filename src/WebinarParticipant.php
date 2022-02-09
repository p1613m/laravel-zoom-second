<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class WebinarParticipant extends Model
{
    //protected $insertResource = 'MacsiDigital\Zoom\Requests\StoreRegistrant';

    protected $endPoint = '/metrics/webinars/{webinar:id}/participants';

    protected $allowedMethods = ['get', 'post', 'put'];

    protected $apiMultipleDataField = 'participants';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
