<?php
    session_start();
    ini_set('display_errors', true);
    error_reporting(E_ALL);

    // basic .env file parsing
    if (file_exists("../.env")) {
      $variables = parse_ini_file("../.env", true);
      foreach ($variables as $key => $value) {
        putenv("$key=$value");
      }
    }

    // routes
        $routes = array(
            'home' => array(
                'controller' => 'Pages',
                'action' => 'index'
            ),
            'about' => array(
                'controller' => 'Pages',
                'action' => 'about'
            ),
            'trucks' => array(
                'controller' => 'Pages',
                'action' => 'trucks'
            ),
            'detail' => array(
                'controller' => 'Pages',
                'action' => 'detail'
            ),
            'practical' => array(
                'controller' => 'Pages',
                'action' => 'practical'
            ),
            'cart' => array(
                'controller' => 'Orders',
                'action' => 'cart'
            ),
            'checkout' => array(
                'controller' => 'Orders',
                'action' => 'checkout'
            )
        );

        if (empty($_GET['page'])) {
            $_GET['page'] = 'home';
          }
          if (empty($routes[$_GET['page']])) {
            header('Location: index.php');
            exit();
          }

          $route = $routes[$_GET['page']];
          $controllerName = $route['controller'] . 'Controller';

          require_once __DIR__ . '/controller/' . $controllerName . ".php";

          $controllerObj = new $controllerName();
          $controllerObj->route = $route;
          $controllerObj->filter();
          $controllerObj->render();
