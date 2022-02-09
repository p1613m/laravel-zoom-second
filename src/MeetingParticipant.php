<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class MeetingParticipant extends Model
{
    //protected $insertResource = 'p1613m\Zoom\Requests\StoreRegistrant';

    protected $endPoint = '/metrics/meetings/{meeting:id}/participants';

    protected $allowedMethods = ['get', 'post', 'put'];

    protected $apiMultipleDataField = 'participants';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
