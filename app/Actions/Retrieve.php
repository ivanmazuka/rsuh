<?php

namespace App\Actions;
use Carbon\Carbon;
class Retrieve extends Action
{

    public function do($time)
    {
        $limitFrom = $this->request->input('limitFrom') ?? 0;
        $limitTo = $this->request->input('limitTo') ?? 6;
        $dateFrom =    $time=='date' ? Carbon::now():$this->request->input('dateFrom');
        $dateTo = $this->request->input('dateTo');



        if ($dateFrom) {
            $this->model = $this->model->where($time, '>', $dateFrom);
        }

        if ($dateTo) {
            $this->model = $this->model->where($time, '<', $dateTo);
        }

        $this->model = $this->model->skip($limitFrom)
            ->take($limitTo)
            ->orderBy($time, 'asc')
            ->get();

        return $this->model;
    }

}