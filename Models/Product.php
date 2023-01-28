<?php

class Product
{

    // Identity
    private $name, $price, $description;
    private Category $category;
    // Optional
    const EXP_DISCOUNT = 30;
    const MAX_DISCOUNT = 90;
    private $expDate, $discount;

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

    public function getExpDate()
    {
        return isset($this->expDate) ? $this->expDate : false;
    }
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;
    }

    public function getDiscount()
    {
        // expiration discount
        $expDiscount =
            $this->getExpDate() /* expDate has been set */
            && true /* expiration delta */ ?
            30 : 0;

        return max($expDiscount, $this->discount);
    }
    public function setDiscount($discount)
    {
        if (
            is_int($discount)
            && ($discount > self::MAX_DISCOUNT || $discount < 0)
        ) {
            throw new Exception("Invalid Argument: discount is not a valid integer!");
        }
        
        $this->discount = $discount;
    }

    // Utils
    public function getHTML()
    {
        return
            "name: " . $this->getName() .
            "<br>" . "price: " . $this->getPrice() .
            "<br>" . "description: " . $this->getDescription() .
            "<br>" . "category: " . $this->getCategory()->getHTML() .
            "<br>" . "exp date: " . $this->getExpDate() ? $this->getExpDate() : "no expiration date" .
            "<br>" . "discount: " . $this->getDiscount() . "%";
    }
}
