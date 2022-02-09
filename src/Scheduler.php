<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Scheduler extends Model
{
    protected $insertResource = 'p1613m\Zoom\Requests\StoreScheduler';
    protected $updateResource = 'p1613m\Zoom\Requests\UpdateScheduler';
    
    protected $endPoint = 'users/{user_id}/schedulers';

    protected $allowedMethods = ['get', 'delete'];

    protected $apiMultipleDataField = 'schedulers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
