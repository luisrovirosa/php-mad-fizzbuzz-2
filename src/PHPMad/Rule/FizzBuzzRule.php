<?php

namespace PHPMad\Rule;

class FizzBuzzRule implements Rule
{

    private $fizz;
    private $buzz;

    public function __construct()
    {
        $this->fizz = new FizzRule();
        $this->buzz = new BuzzRule();
    }

    public function check($num)
    {
        return $this->fizz->check($num) && $this->buzz->check($num);
    }

    public function value($num)
    {
        return 'FizzBuzz';
    }

}
