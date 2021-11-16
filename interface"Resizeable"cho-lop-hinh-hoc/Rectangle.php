<?php
include_once "Resizeable.php";

class Rectangle implements Resizeable
{
    public $name;
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
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

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function reSize($percent)
    {
        $this->setWidth($percent * $this->getWidth());
        $this->setHeight($percent * $this->getHeight());
    }

    public function getSize()
    {
        return $this->getWidth() . ", " . $this->getHeight();
    }
}