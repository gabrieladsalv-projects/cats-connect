<?php

class User {
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;
    private $photo;
    private $birthDate;

    // Construtor
    public function __construct($id, $name, $username, $email, $password, $photo, $birthDate) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
        $this->birthDate = $birthDate;
    }

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->name = $username;
    }


    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    public function getBirthDate() {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

}

?>
