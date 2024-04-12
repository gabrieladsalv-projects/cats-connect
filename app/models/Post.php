<?php

class Post {
    private $id;
    private $userId;
    private $author;
    private $catPhoto;
    private $description;
    private $createdAt;

    // Construtor
    public function __construct($id, $userId, $author, $catPhoto, $description, $createdAt) {
        $this->id = $id;
        $this->userId = $userId;
        $this->author = $author;
        $this->catPhoto = $catPhoto;
        $this->description = $description;
        $this->createdAt = $createdAt;
    }

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }
    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getCatPhoto() {
        return $this->catPhoto;
    }

    public function setCatPhoto($catPhoto) {
        $this->catPhoto = $catPhoto;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

}

?>
