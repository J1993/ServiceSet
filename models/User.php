<?php

require_once 'BaseModel.php';

class User extends BaseModel {
    public $name;
    public $surname;
    public $email;
    public $password;

    public function__construct() {
        parent::__construct();
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setSurname($surname) {
        $this->surname = $surname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function registerUser($data) {

    }

    public function accessUser($email, $password) {

    }

}

?>