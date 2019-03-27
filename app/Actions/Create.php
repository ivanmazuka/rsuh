<?php

namespace App\Actions;

class Create extends Action
{
    public function do()
    {
        $this->model->fill($this->request->all());
        return $this->model->save();
    }

}