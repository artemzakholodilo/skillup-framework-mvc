<?php

namespace App;

use App\Helper\UrlHelper;

class Application
{
    public function run()
    {
        $route = $_GET['r'];
        if (!$route) {
            throw new \InvalidArgumentException("Route not found");
        }
        $controllerName = UrlHelper::getControllerAndAction($route)[0];
        $controllerFullName = CONTROLLER_NAMESPACE . '\\' . ucfirst($controllerName) . 'Controller';
        if (!class_exists($controllerFullName)) {
//            $controllerFullName = DEFAULT_CONTROLLER;
            throw new \InvalidArgumentException('Controller not found');
        }
        $controller = new $controllerFullName();
        $actionName = UrlHelper::getControllerAndAction($route)[1] . 'Action';
        if (!method_exists($controller, $actionName)) {
//            $actionName = DEFAULT_ACTION;
            throw new \Exception('Action not found');
        }

        $controller->$actionName();
    }
}