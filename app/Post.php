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
    public function time1()
    {
        $data = $this->created_at;
        $data = date('d/m/Y');

        return $data;
    }
}
