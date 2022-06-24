<?php

namespace App\Controller;

use App\Core\MVC\AbstractController;

class IndexController extends AbstractController
{
    public function indexAction(): string
    {
        return $this->view->render('index/index.php');
    }
}
