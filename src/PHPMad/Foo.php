<?php

namespace PHPMad;

class Foo
{

    public function run()
    {
        $data = array();
        for ($i = 1; $i <= 100; $i++) {
            $data[] = $this->computeMultipleOf3($i);
        }
        return $data;
    }

    private function computeMultipleOf3($pos)
    {
        if ($pos % 3 == 0) {
            return 'Fizz';
        } elseif ($pos % 5 == 0) {
            return 'Buzz';
        }

        return $pos;
    }

}
