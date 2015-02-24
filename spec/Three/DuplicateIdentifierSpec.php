<?php namespace spec\Mnel\Realmdigital\Three;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DuplicateIdentifierSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mnel\Realmdigital\Four\DuplicateIdentifier');
    }

    function it_can_identify_duplicate_integers_in_an_array()
    {
        $integersA = [ 1, 2, 3, 4, 5, 6 ];
        $integersB = [ 4, 5, 6, 7, 8, 9 ];

        $this->findMatchingValues($integersA, $integersB)->shouldReturn([ 4, 5, 6 ]);
    }
}
