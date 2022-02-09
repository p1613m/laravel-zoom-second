<?php

namespace p1613m\Zoom;

use MacsiDigital\API\Support\Resource;

class WebinarSetting extends Resource
{
    public function globalDialInCountries()
    {
        return $this->hasMany(GlobalDialInCountry::class);
    }
}
