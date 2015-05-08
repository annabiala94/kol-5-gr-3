<?php

namespace spec\kamilnap\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorekSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamilnap\Tools\Kalkulatorek');
    }
    
    function it_should_calculate_sum()
{
    $this->setA(5)->setB(15)->setH(1)->sum()->shouldReturn(10);
}
}
