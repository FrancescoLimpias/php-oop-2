<?php

class Category
{

    // Identity
    private $name, $description;
    public function __construct($name, $description)
    {
        $this->setName($name);
        $this->setDescription($description);
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

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Utils
    public function getHTML()
    {
        return
            "Name: " . $this->getName()
            . "<br>" . "Desc: " . $this->getDescription();
    }
}
