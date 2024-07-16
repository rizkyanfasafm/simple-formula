<?php

namespace Rizkyanfasafm\SimpleFormula\Type;

class Rectangle
{
    public static function side(int $side): self
    {
        return new static($side);
    }
    public function __construct(protected int $side)
    {
    }

    /**
     * @return int
     * To calculate the wide of the rectangle
     * Untuk menghitung luas
     */
    public function wide(): int
    {
        return $this->side * $this->side;
    }

    /**
     * @return int
     * To calculate the around of the rectangle
     * Untuk menghitung keliling
     */
    public function around(): int
    {
        return $this->side * 4;
    }
}
