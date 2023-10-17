<?php

class Calculator
{
    protected float $a;
    protected float $b;

    public function addition($a, $b): float {
        if ($this->checkNumeric($a, $b)) {
            return $a + $b;
        }
    }

    public function subtraction($a, $b): float {
        if ($this->checkNumeric($a, $b)) {
            return $a - $b;
        }
    }

    public function multiplication($a, $b): float {
        if ($this->checkNumeric($a, $b)) {
            return $a * $b;
        }
    }

    /**
     * @throws Exception
     */
    public function division($a, $b): float {
        if ($b==0) {
            throw new Exception('Деление на ноль.');
        }
        if ($this->checkNumeric($a, $b)) {
            return round($a/$b, 4);
        }
    }

    private function checkNumeric($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new Exception('Оба значения должны быть числами.');
        }

        return true;
    }
}