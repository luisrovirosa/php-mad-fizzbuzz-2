<?php

namespace PHPMad\Rule;

class FizzRule extends IsMultipleOrContainsRule
{

    public function __construct()
    {
        parent::__construct(3, 'Fizz');
    }

}
