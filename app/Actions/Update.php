<?php

namespace App\Actions;

class Update extends Action
{
    public function do()
    {
        return $this->model->update($this->request->all());
    }
}