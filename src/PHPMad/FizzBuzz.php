<?php

namespace PHPMad;

class FizzBuzz
{

    const NUM = 100;

    private $rules;

    public function __construct()
    {
        $this->rules = array(
            new Rule\FizzBuzzRule(),
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

        /* @var $rule \PHPMad\Rule\Rule */
        foreach ($this->rules as $rule) {
            if ($rule->check($num)) {
                return $rule->value($num);
            }
        }

        return $num;
    }

}
