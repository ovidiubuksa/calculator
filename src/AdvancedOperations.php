<?php

namespace App;

class AdvancedOperations extends BasicOperations
{
    public function power($a, $b)
    {
        return $a ** $b;
    }

    public function sqrtorder($a, $b)
    {
        return $a ** $this->divide(1, $b);
    }
}