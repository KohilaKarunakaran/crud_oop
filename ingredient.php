<?php

class ingredient{
    private $id;
    private $ingredient;
    private $recipe;

    public function __construct($ingredient = "", $recipe = "") {
        $this->ingredient = $ingredient;
        $this->recipe = $recipe;
    }

    public function setIngredient($ingredient, $recipe) {
        $this->ingredient = $ingredient;
        $this->recipe = $recipe;
    }
    public function getIngredient(recipeID) {
        return $this->ingredient;
    }

}
?>