<?php
include_once "Resizeable.php";
class Circle implements Resizeable
{
public $name;
public $radius;


    public function __construct($name, $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function reSize($percent)
    {
    $this->setRadius($percent * $this->getRadius());
    }

    public function getSize()
    {
        return $this->getRadius();
    }


}