<?php

namespace App\polygons;

class Square {
    protected float $width;
    protected float $height;

    /**
     * @return mixed
     */
    public function getWidth():float{
        return $this->width;
    }

    public function setWidth(float $width): void{
        $this->width = $width;
        $this->height = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight(): float{
        return $this->height;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
        $this->width = $height;
    }

}