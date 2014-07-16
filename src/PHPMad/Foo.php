<?php

namespace PHPMad;

class Foo
{

    public function run()
    {
        $data = array();
        for ($i = 1; $i <= 100; $i++) {
            $data[] = $this->generateNumber($i);
        }
        return $data;
    }

    private function generateNumber($num)
    {
        if ($this->isFizz($num) && $this->isBuzz($num)) {
            return 'FizzBuzz';
        } elseif ($this->isFizz($num)) {
            return 'Fizz';
        } elseif ($this->isBuzz($num)) {
            return 'Buzz';
        }

        return $num;
    }

    private function isFizz($num)
    {
        return $num % 3 == 0 || strpos($num, '3') !== false;
    }

    private function isBuzz($num)
    {
        return $num % 5 == 0 || strpos($num, '5') !== false;
    }

}
