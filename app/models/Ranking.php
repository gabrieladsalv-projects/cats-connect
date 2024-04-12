<?php

class CatBreedRanking {
    private $id;
    private $breedName;
    private $averageRating;
    private $totalReviews;

    // Construtor
    public function __construct($id, $breedName, $averageRating, $totalReviews) {
        $this->id = $id;
        $this->breedName = $breedName;
        $this->averageRating = $averageRating;
        $this->totalReviews = $totalReviews;
    }

    // Getters e Setters
    public function getId() {
        return $this->id;
    }

    public function getBreedName() {
        return $this->breedName;
    }

    public function setBreedName($breedName) {
        $this->breedName = $breedName;
    }

    public function getAverageRating() {
        return $this->averageRating;
    }

    public function setAverageRating($averageRating) {
        $this->averageRating = $averageRating;
    }

    public function getTotalReviews() {
        return $this->totalReviews;
    }

    public function setTotalReviews($totalReviews) {
        $this->totalReviews = $totalReviews;
    }

    // Outros métodos de lógica de negócios relacionados ao ranking de raças de gatos podem ser adicionados aqui
}

?>
