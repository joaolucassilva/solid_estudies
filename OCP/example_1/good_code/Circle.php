<?php

use JetBrains\PhpStorm\Pure;

class Circle implements Shape
{
    private int $radius;

    #[Pure] public function area(): int
    {
        return $this->getRadius() * $this->getRadius() * pi();
    }

    /**
     * @param int $radius
     * @return Circle
     */
    public function setRadius(int $radius): Circle
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }
}