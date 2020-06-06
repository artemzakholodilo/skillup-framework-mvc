<?php

namespace App\Controller;

use App\Exceptions\FileNotFoundException;

class BaseController
{
    protected function render($file, array $params = [])
    {
        extract($params);
        ob_start();
        $fileName = VIEW_PATH . $file . '.php';
        if (!file_exists($fileName)) {
            throw new FileNotFoundException("File {$fileName} not exists");
        }
        include($fileName);
        ob_flush();
    }
}