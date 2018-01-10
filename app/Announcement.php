<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Announcement extends Model
{
    public function announcementMonth()
    {


        //TODO: убрать проверуку на null
        $dateTime = new Carbon();
        if ($this->created_at != null) {
            $dateTime = $this->created_at;


            $monthNumber = $dateTime->month;

            $months = [
                '1' => 'Янв',
                '2' => 'Фев',
                '3' => 'Мар',
                '4' => 'Апр',
                '5' => 'Май',
                '6' => 'Июн',
                '7' => 'Июл',
                '8' => 'Авг',
                '9' => 'Сен',
                '10' => 'Окт',
                '11' => 'Ноя',
                '12' => 'Дек',
            ];
            $day = $dateTime->day;

            $month = $months[$monthNumber];


            return $month;
        }
        //
    }


    public function announcementDay()
    {
        $dataTime = $this->created_at;
        return $dataTime->day;

    }

}
