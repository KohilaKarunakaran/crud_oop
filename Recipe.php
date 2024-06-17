<?php

class Recipe{
    private $id;
    private $name;
    private $directions;

    public function __construct($name = "", $directions = "") {
        $this->name = $name;
        $this->directions = $directions;
    }

    public function setIngredient($ingredient) {
        $this->ingredient = $ingredient;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setDirections($directions) {
        $this->directions = $directions;
    }

    public function getName() {
        return $this->name;
    }
    public function getDirections() {
        return $this->directions;
    }
    public function getIngredient() {
        return $this->ingredient;
    }
    public function getID() {
        return $this->id;
    }

}
?>