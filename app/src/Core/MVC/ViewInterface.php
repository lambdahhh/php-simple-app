<?php

namespace App\Core\MVC;

interface ViewInterface
{
    public function render(string $template, array $params): string;
}
