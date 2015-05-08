<?php

namespace spec\annabiala94\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TrapezSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('annabiala94\Tools\Trapez');
    }
    
      function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    
     function it_should_trapez()
   {
      $this->setA(1)->setB(3)->setH(2)->trapez()->shouldReturn(4);
   }
 
}
