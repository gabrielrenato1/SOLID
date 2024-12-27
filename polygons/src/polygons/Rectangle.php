<?php

namespace App\polygons;

class Rectangle{

    protected float $width;
    protected float $height;

    /**
     * @return mixed
     */
    public function getWidth():float{
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth(float $width): void{
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight(): float{
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight(float $height): void{
        $this->height = $height;
    }

}