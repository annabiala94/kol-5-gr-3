<?php

namespace spec\TomekKlyz\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TomekKlyz\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(234)->getB()->shouldReturn(234);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    
    function it_should_calculate_multiplication()
    {
    $this->setA(3)->setB(2)->setH(4)->multiplication()->shouldReturn(10);
    }
}