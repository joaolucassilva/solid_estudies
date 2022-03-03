<?php

use JetBrains\PhpStorm\Pure;

class Rectangle implements Shape
{
    private int $width;
    private int $height;

    #[Pure] public function area(): int
    {
        return $this->getWidth() * $this->getHeight();
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $width
     * @return Rectangle
     */
    public function setWidth(int $width): Rectangle
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param int $height
     * @return Rectangle
     */
    public function setHeight(int $height): Rectangle
    {
        $this->height = $height;
        return $this;
    }
}
