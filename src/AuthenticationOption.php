<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class AuthenticationOption extends Model
{
    protected $insertResource = 'p1613m\Zoom\Requests\StoreAuthenticationOption';
    protected $updateResource = 'p1613m\Zoom\Requests\UpdateAuthenticationOption';
}
