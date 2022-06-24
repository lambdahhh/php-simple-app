<?php

namespace App\Controller;

use App\Core\MVC\AbstractController;
use App\Core\MVC\MVCException;

class IndexController extends AbstractController
{
    /**
     * @throws MVCException
     */
    public function indexAction(): string
    {
        return $this->view->render('index/index.php');
    }
}
