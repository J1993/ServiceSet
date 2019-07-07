<?php

    require_once './models/User.php';

    class UserController {


        public function register (){

            require_once('./views/includes/header.php');
            require_once('./views/includes/footer.php');

        }

        public function login (){
            session_start();
            session_destroy();
            
            require_once('./views/includes/header.php');
            require_once('./views/includes/footer.php');

        }

        public function registerUser($data) {

            if (!isset($data['email'])) {
                 $errors = "";

            }

            $userModel = new User();   
            $userModel->registerUser($data);
        }

        public function accessUser($data) {
            /**
             * Iniciamos sesion para guardar el ID y el rol del usuario
             * con el fin de validar a que pagina sera redireccionado el usuario
             * en concreto.
             */
            
            session_start();

            $userModel = new User();

            $response = $userModel->accessUser($data['email'], $data['password']);

            if ($response != false) {
                foreach ($response as $r) {
                    $_SESSION['user_id'] = $r['user_id'];
                    $_SESSION['rol_id'] = $r['rol_id'];
                }
                if ($_SESSION['rol_id'] == 1) {
                    header('Location: index.php?page=dashboard');
                    die();
                } else {
                    header('Location: index.php?page=blog');
                    die();
                }
            }

        }
    
    
    }

?>