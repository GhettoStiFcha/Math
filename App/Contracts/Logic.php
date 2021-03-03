<?php

namespace Contracts;

use Contracts\Math;

class Logic
{
    private $a;
    private $b;
    private $operation;
    private $math;

    public function __construct()
    {
        $this->a1 = $_POST['argument-a1'] ?? null;
        $this->a2 = $_POST['argument-a2'] ?? null;
        $this->b1 = $_POST['argument-b1'] ?? null;
        $this->b2 = $_POST['argument-b2'] ?? null;
        $this->operation = $_POST['operation'] ?? null;
        $this->math = new Math();
    }

    public function startThinking()
    {
        if($this->operation == 'addition'){
            $result = $this->math->addition($this->a1, $this->b1, $this->a2, $this->b2);
        } else if ($this->operation == 'subtraction'){
            $result = $this->math->subtraction($this->a1, $this->b1, $this->a2, $this->b2);
        } else if ($this->operation == 'multiplication'){
            $result = $this->math->multiplication($this->a1, $this->b1, $this->a2, $this->b2);
        } else if ($this->operation == 'division') {
            $result = $this->math->division($this->a1, $this->b1, $this->a2, $this->b2);
        } else {
            $result = 'Произошла ошибка';
        }

        return $result;
    }
}