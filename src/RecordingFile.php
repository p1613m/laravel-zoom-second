<?php

namespace p1613m\Zoom;

use p1613m\Zoom\Support\Model;

class RecordingFile extends Model
{
    public function recording()
    {
        return $this->belongsTo(Recording::class);
    }
}
