<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class BaseModel extends Eloquent {
    use SoftDeletingTrait;

    // FORMATS UTC TIMESTAMPS TO CHICAGO TIMEZONE
    protected function formatUTCToChicago($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
    
    // ACCESS CREATED_AT FIELD
    public function getCreatedAtAttribute($value)
    {
        return $this->formatUTCToChicago($value);
    }

    // ACCESS UPDATED_AT FIELD
    public function getUpdatedAtAttribute($value)
    {
        return $this->formatUTCToChicago($value);
    }
}

