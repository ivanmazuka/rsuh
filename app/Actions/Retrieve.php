<?php

namespace App\Actions;

class Retrieve extends Action
{
    public function do()
    {
        $limitFrom = $this->request->input('limitFrom') ?? 0;
        $limitTo = $this->request->input('limitTo') ?? 4;
        $dateFrom = $this->request->input('dateFrom');
        $dateTo = $this->request->input('dateTo');

        if ($dateFrom) {
            $this->model = $this->model->where('created_at', '>', $dateFrom);
        }

        if ($dateTo) {
            $this->model = $this->model->where('created_at', '<', $dateTo);
        }

        $this->model = $this->model->skip($limitFrom)
            ->take($limitTo)
            ->get();

        return $this->model;
    }

}