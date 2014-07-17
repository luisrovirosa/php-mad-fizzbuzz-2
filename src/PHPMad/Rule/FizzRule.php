<?php

namespace PHPMad\Rule;

class FizzRule implements Rule
{

    public function check($num)
    {
        return $this->isMultipleOrContains($num, 3);
    }

    public function value($num)
    {
        return 'Fizz';
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
