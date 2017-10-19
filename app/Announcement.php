<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Announcement extends Model
{
    public function announceTime()
    {
        //TODO: убрать проверуку на null
        $dateTime = new Carbon();
        if($this->created_at!=null) {
            $dateTime = $this->created_at;
            $dateTime = $dateTime->format('d M');
        }else{$dateTime = Carbon::now();
            $dateTime = $dateTime->format('d M');
        }

        return $dateTime;
    }
    //
}
