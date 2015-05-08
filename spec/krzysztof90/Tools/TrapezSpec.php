<?php

namespace spec\krzysztof90\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysztof90\Tools\Trapez');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(2)->getH()->shouldReturn(2);
    }
    
    function it_should_calculate_trapezation()
    {
        $this->setA(5)->setB(7)->setH(4)->trapezation()->shouldReturn(24);
    }
}
