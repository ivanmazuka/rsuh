<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public function announceTime()
    {
        $dateTime = $this->created_at;
        $dateTime= strftime('%d %b');
        return $dateTime;
    }
    //
}
