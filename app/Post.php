<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        $postTime = $this->created_at;
        $postTime = date('d/m/Y');

        return $postTime;
    }
}
