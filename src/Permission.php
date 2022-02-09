<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Permission extends Model
{
    protected $endPoint = 'users/{user_id}/permissions';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'permissions';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
