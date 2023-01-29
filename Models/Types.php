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

    public function getHTML()
    {
        return parent::getHTML()
            . "<br>" . "ingredients: " . implode(", ", $this->getIngredients());
    }
}

class Toy extends Product
{

    private $age;

    // Constructor
    public function __construct($name, $price, $description, $category, $age)
    {
        parent::__construct($name, $price, $description, $category);
        $this->setAge($age);
    }

    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getHTML()
    {
        return parent::getHTML()
            . "<br>" . "age: " . $this->getAge() . "+";
    }
}
