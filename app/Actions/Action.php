<?php

namespace App\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class Action
{
    protected $model;
    protected $request;

    public  function __construct(Model $model, Request $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    abstract public function do();
}
