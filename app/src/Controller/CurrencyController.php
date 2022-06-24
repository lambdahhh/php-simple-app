<?php

namespace App\Controller;

use App\Core\MVC\AbstractController;
use App\Core\MVC\MVCException;

class CurrencyController extends AbstractController
{
    /**
     * @throws MVCException
     */
    public function indexAction(): string
    {
        $currency = [
            ['CharCode' => 'EUR', 'Name' => 'Евро', 'Value' => 1.1],
            ['CharCode' => 'USD', 'Name' => 'Доллар', 'Value' => 1.0],
        ];

        return $this->view->render('currency/index.php', [
            'currency' => $currency
        ]);
    }
}
