<?php

namespace spec\golabm1993\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class trapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('golabm1993\Tools\trapez');
    }
    
    function it_should_have_setter_and_gettter()
    {
        $this->setA(567)->getA()->shouldReturn(567);
        $this->setB(891)->getB()->shouldReturn(891);
        $this->setH(234)->getH()->shouldReturn(234);
    }
    
    function it_should_calculate_area()
    {
        $this->setA(5)->setB(7)->setH(2)->area()->shouldReturn(12);
    }
}
