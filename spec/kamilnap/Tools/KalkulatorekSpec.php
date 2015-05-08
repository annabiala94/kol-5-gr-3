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
}
