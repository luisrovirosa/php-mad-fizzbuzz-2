<?php

namespace PHPMad\Rule;

class SameNumRule implements Rule
{

    public function check($num)
    {
        return true;
    }

    public function value($num)
    {
        return $num;
    }

}
