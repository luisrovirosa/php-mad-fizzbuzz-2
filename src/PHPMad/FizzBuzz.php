<?php

namespace PHPMad;

class FizzBuzz
{

    const NUM = 100;

    private $ruleEngine;

    public function __construct()
    {
        $this->ruleEngine = new RuleEngine();
        $this->ruleEngine
                ->addRule(new Rule\FizzBuzzRule())
                ->addRule(new Rule\FizzRule())
                ->addRule(new Rule\BuzzRule())
                ->addRule(new Rule\SameNumRule())
        ;
    }

    public function run()
    {
        $data = array();
        for ($i = 1; $i <= self::NUM; $i++) {
            $data[] = $this->ruleEngine->generateNumber($i);
        }
        return $data;
    }

}
