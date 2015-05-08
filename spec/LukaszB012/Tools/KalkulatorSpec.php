<?php

namespace spec\LukaszB012\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LukaszB012\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(11)->getA()->shouldReturn(11);
        $this->setB(22)->getB()->shouldReturn(22);
        $this->setH(33)->getH()->shouldReturn(33);
    }
    function it_should_calculate_area()
    {
    $this->setA(4)->setB(3)->setH(2)->area()->shouldReturn(7);
    }
}
