<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class Account extends Model
{
    // API included but its not open to the majority of API Users
    protected $insertResource = 'p1613m\Zoom\Requests\StoreAccount';
    protected $updateResource = 'p1613m\Zoom\Requests\UpdateAccount';
    
    protected $endPoint = 'accounts';

    protected $allowedMethods = ['get', 'post', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'accounts';
}
