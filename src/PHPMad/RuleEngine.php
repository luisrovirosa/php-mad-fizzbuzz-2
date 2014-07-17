<?php

namespace PHPMad;

class RuleEngine
{

    private $rules;

    public function __construct()
    {
        $this->rules = array();
    }

    public function addRule($rules)
    {
        $this->rules[] = $rules;

        return $this;
    }

    public function generateNumber($num)
    {
        /* @var $rule \PHPMad\Rule\Rule */
        foreach ($this->rules as $rule) {
            if ($rule->check($num)) {
                return $rule->value($num);
            }
        }
    }

}
