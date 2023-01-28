<?php

class Food extends Product
{

    private $ingredients;

    // Constructor
    public function __construct($name, $price, $description, $category, $expDate, $ingredients)
    {
        parent::__construct($name, $price, $description, $category);
        parent::setExpDate($expDate);
        $this->setIngredients($ingredients);
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->getIngredients());
    }
}
