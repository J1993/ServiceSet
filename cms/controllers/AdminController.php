<?php

    require_once 'models/Admin.php';

    class AdminController {

        public function dashboard() {
            session_start();
            if ($_SESSION['rol_id'] != 1) {
                header('Location: index.php?page=login');
                die();
            } else {
                require_once('./views/includes/header.php');
                require_once('./views/admin/dashboard.php');
                require_once('./views/includes/footer.php');
            }
        }


    }
?>
