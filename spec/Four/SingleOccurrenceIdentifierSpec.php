<?php namespace spec\Mnel\Realmdigital\Four;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SingleOccurrenceIdentifierSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mnel\Realmdigital\Four\SingleOccurrenceIdentifier');
    }

    function it_can_identify_integers_in_an_array_that_occur_only_once()
    {
        $this->identifyArray([ 1, 2, 3, 3, 5, 1,7, 2 ])->shouldReturn([ 5, 7 ]);
    }
}
