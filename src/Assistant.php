<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Assistant extends Model
{
    protected $insertResource = 'p1613m\Zoom\Requests\StoreAssistant';
    protected $updateResource = 'p1613m\Zoom\Requests\UpdateAssistant';
    
    protected $endPoint = 'users/{user_id}/assistants';

    protected $allowedMethods = ['get', 'post', 'delete'];

    protected $apiMultipleDataField = 'assistants';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
