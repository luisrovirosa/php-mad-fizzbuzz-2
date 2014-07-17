<?php

namespace PHPMad\Rule;

interface Rule
{

    /**
     * @return bool If match the rule
     */
    public function check($num);

    /**
     * @return string | null The value if the rule is mached
     */
    public function value($num);
}
