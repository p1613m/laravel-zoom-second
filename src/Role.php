<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Role extends Model
{
    protected $insertResource = 'p1613m\Zoom\Requests\StoreRole';
    protected $updateResource = 'p1613m\Zoom\Requests\UpdateRole';
    
    protected $endPoint = 'roles';

    protected $allowedMethods = ['find', 'get', 'post', 'patch', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'roles';

    public function members()
    {
        return $this->hasMany(User::class, 'members');
    }

    public function giveRoleTo($user)
    {
    }

    public function removeRoleFrom($user)
    {
    }
}
