<?php

namespace App\Actions;

class Delete extends Action
{
    public function do()
    {
        if ($this->request->input('password') === 'BEVXY7C7')
        {
            return $this->model->delete();
        }

        return 'Wrong password.';
    }

}