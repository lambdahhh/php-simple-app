<?php

namespace App\Core\MVC;

abstract class AbstractController
{
    protected Model $model;
    protected View  $view;

    public function __construct(Model $model, View $view)
    {
        $this->model = $model;
        $this->view = $view;
    }
}
