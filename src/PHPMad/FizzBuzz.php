<?php

namespace PHPMad;

class FizzBuzz
{

    const NUM = 100;

    public function run()
    {
        $data = array();
        for ($i = 1; $i <= self::NUM; $i++) {
            $data[] = $this->generateNumber($i);
        }
        return $data;
    }

    private function generateNumber($num)
    {
        if ($this->isFizz($num) && $this->isBuzz($num)) {
            return 'FizzBuzz';
        } elseif ($this->isFizz($num)) {
            return 'Fizz';
        } elseif ($this->isBuzz($num)) {
            return 'Buzz';
        }

        return $num;
    }

    private function isFizz($num)
    {
        return $this->isMultipleOrContains($num, 3);
    }

    private function isBuzz($num)
    {
        return $this->isMultipleOrContains($num, 5);
    }

    private function isMultipleOrContains($num, $numberHasToContains)
    {
        return $this->isMultiple($num, $numberHasToContains) || $this->contains($num, $numberHasToContains);
    }

    private function isMultiple($num, $multiple)
    {
        return $num % $multiple == 0;
    }

    private function contains($numToCheck, $numberHasToContain)
    {
        return strpos($numToCheck, (string) $numberHasToContain) !== false;
    }

}
