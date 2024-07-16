<?php

namespace Rizkyanfasafm\SimpleFormula\Type;

class Zakat{

    protected static float $percentage = 2.5;

    public static function count(int $amount): self
    {
        return new static($amount);
    }

    public function __construct(protected int $amount)
    {

    }

    public function calculate(): int
    {
        return $this->amount * static::$percentage / 100;
    }
}
