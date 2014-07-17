<?php

namespace PHPMad\Rule;

class IsMultipleOrContainsRule implements Rule
{

    private $multipleValue;
    private $value;

    public function __construct($multipleValue, $value)
    {
        $this->multipleValue = $multipleValue;
        $this->value = $value;
    }

    public function check($num)
    {
        return $this->isMultipleOrContains($num, $this->multipleValue);
    }

    public function value($num)
    {
        return $this->value;
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
