<?php

class Product
{

    // Identity
    private $name, $price, $description;
    private Category $category;

    // Constructor
    public function __construct($name, $price, $description, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }

    // Properties
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }

    // Utils
    public function getHTML()
    {
        return
            "name: " . $this->getName() .
            "<br>" . "price: " . $this->getPrice() .
            "<br>" . "description: " . $this->getDescription() .
            "<br>" . "category: " . $this->getCategory()->getHTML();
    }
}
