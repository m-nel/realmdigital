<?php namespace spec\Mnel\Realmdigital\Five;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IntegerSorterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mnel\Realmdigital\Five\IntegerSorter');
    }

    function it_can_sort_an_array_of_integers()
    {
        $this->sortIntegers([ 4, 6, 1, 3, 2, 5 ])->shouldReturn([ 1, 2, 3, 4, 5, 6 ]);
    }
}
