<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public function time2()
    {
        $data = $this->created_at;
        $data = strftime('%d %b');
        return $data;
    }
    //
}
