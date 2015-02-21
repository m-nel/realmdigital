<?php namespace spec\Mnel\Realmdigital\Two;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PalindromeIdentifierSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mnel\Realmdigital\Two\PalindromeIdentifier');
    }

    function it_can_identify_a_palindrome()
    {
        $this->checkString("abccba")->shouldReturn(true);
        $this->checkString("a man, a plan, a canal, panama")->shouldReturn(true);
        $this->checkString("aabbcc")->shouldReturn(false);
        $this->checkString("a quick brown fox")->shouldReturn(false);
        $this->checkString("abba")->shouldReturn(true);
    }
}
