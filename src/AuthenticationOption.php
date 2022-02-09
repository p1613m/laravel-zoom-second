<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class AuthenticationOption extends Model
{
    protected $insertResource = 'MacsiDigital\Zoom\Requests\StoreAuthenticationOption';
    protected $updateResource = 'MacsiDigital\Zoom\Requests\UpdateAuthenticationOption';
}
