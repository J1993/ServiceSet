<?php
    require_once 'config.php';

    $page = $_GET['page'];

    if (!empty($page)) {
        #http://curso-php.test/cms/index.php?page=buscar
        $data = array(
          'dashboard' => array('model' => 'Admin', 'view' => 'dashboard', 'controller' => 'AdminController'),
          'registro' => array('model' => 'User', 'view' => 'register', 'controller' => 'UserController'),
          'login' => array('model' => 'User', 'view' => 'login', 'controller' => 'UserController'),
          'blog' => array('model' => 'Blog', 'view' => 'index', 'controller' => 'BlogController'),
        );
      
        foreach($data as $key => $components) {
          if ($page == $key) {
            $model = $components['model'];
            $view = $components['view'];
            $controller = $components['controller'];
            break;
          }
        }
      
        if (isset($model)) {
          require_once 'controllers/'.$controller.'.php';
          $objeto = new $controller();
          $objeto->$view();
        }
      } else {
        header('Location: index.php?page=blog');
      }
      
?>