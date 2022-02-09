<?php

namespace p1613m\Zoom;

use MacsiDigital\API\Support\Resource;

class ScheduleMeeting extends Resource
{
    public function recordingPasswordRequirement()
    {
        return $this->hasOne(MeetingPasswordRequirement::class);
    }
}
