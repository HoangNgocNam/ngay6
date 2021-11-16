<?php
include_once "Resizeable.php";
class Square implements Resizeable
{
    public $name;
    public $width;

    public function __construct($name, $width)
    {
        $this->name = $name;
        $this->width = $width;
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
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->width;
    }


    public function reSize($percent)
    {
        $this->setWidth($percent*$this->getWidth());

    }

    public function getSize()
    {
        return $this->getWidth();
    }
}