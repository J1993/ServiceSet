<?php

    require_once './models/User.php';

    class UserController {


        public function register (){

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
    }

?>