<?php

namespace PHPMad;

class FizzBuzz
{

    const NUM = 100;

    private $rules;

    public function __construct()
    {
        $this->rules = array(
            new Rule\FizzRule(),
            new Rule\BuzzRule(),
        );
    }

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
        }

        /* @var $rule \PHPMad\Rule\Rule */
        foreach ($this->rules as $rule) {
            if ($rule->check($num)) {
                return $rule->value($num);
            }
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
