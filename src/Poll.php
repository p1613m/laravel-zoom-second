<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Poll extends Model
{
    protected $insertResource = 'p1613m\Zoom\Requests\StorePoll';
    protected $storeResource = 'p1613m\Zoom\Requests\UpdatePoll';

    protected $endPoint = '/meetings/{meeting:id}/polls';

    protected $allowedMethods = ['find', 'get', 'post', 'put', 'delete'];

    protected $apiMultipleDataField = 'polls';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }

    public function questions()
    {
        return $this->hasMany(PollQuestion::class);
    }
}
