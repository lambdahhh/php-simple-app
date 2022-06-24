<?php

namespace App\Core\MVC;

class View implements ViewInterface
{
    /**
     * @throws MVCException
     */
    public function render(string $template, array $params = []): string
    {
        $path = sprintf('./../templates/%s', $template);
        if (file_exists($path)) {
            extract($params);
            return include($path);
        }
        throw new MVCException('Шаблон не найден');
    }
}
