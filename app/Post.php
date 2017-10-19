<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Post extends Model
{
    public function short()
    {
        $result = substr($this->body, 0, 100);

        if (strlen($this->body) >= 100) {
            if (substr($result, 99) == ' ')
                $result = substr($result, 0, 98);

            return $result . '...';

        } else {
            return $result;
        }

    }

    //
    public function postTime()
    {

        //TODO: убрать проверуку на null
        $postTime = new Carbon();
        if($this->created_at!=null) {
            $postTime = $this->created_at;
            $postTime = $postTime->format('d/m/Y');
        }else{
            $postTime = Carbon::now();
            $postTime = $postTime->format('d/m/Y');
        }

        return $postTime;
    }
}
