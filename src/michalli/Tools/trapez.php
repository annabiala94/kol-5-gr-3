<?php

namespace michalli\Tools;

class trapez
{

    private $a;
    private $b;
    private $h;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }
   
    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
    
    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getH()
    {
        return $this->h;
    }
}
