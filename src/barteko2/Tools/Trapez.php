<?php

namespace barteko2\Tools;

class Trapez
{

    private $a;
    private $b;

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
    public function setH($h)
    {
        $this->h = $h;

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
    public function getH()
    {
        return $this->h;
    }
    function it_should_trapez_pole()
{
    $this->setA(5)->setB(7)->setH(2)->poleTrapezu()->shouldReturn(12);
}
    
public function poleTrapezu()
{
    return $this->a + $this->b * $this->h/2;
}
}
