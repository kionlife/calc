<?php

namespace Calc\Shapes;

use Calc\Interfaces\Area;
use Calc\Interfaces\Perimeter;

class Rectangle implements Area, Perimeter {
    protected float $width;
    protected float $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->height);
    }
}
