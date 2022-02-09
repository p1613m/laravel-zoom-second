<?php

namespace p1613m\Zoom;

use p1613m\API\Support\Resource;

class WebinarSetting extends Resource
{
    public function globalDialInCountries()
    {
        return $this->hasMany(GlobalDialInCountry::class);
    }
}
