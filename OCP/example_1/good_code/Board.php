<?php

class Board
{
    public Shape $shapes;

    public function calculateArea(): int
    {
        $area = 0;
        foreach ($this->shapes as $shape) {
            $area += $shape->area();
        }

        return $area;
    }

    /**
     * @param Shape $shapes
     */
    public function setShapes(Shape $shapes): void
    {
        $this->shapes = $shapes;
    }
}

$board = new Board();
$board->setShapes(new Circle());
$board->calculateArea();

$board->setShapes(new Rectangle());
$board->calculateArea();