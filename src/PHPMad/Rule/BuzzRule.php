<?php

namespace PHPMad\Rule;

class BuzzRule extends IsMultipleOrContainsRule
{

    public function __construct()
    {
        parent::__construct(5, 'Buzz');
    }

}
