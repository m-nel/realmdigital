<?php namespace spec\Mnel\Realmdigital\One;

use Mnel\Realmdigital\One\StringReplacer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringReplacerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mnel\Realmdigital\One\StringReplacer');
    }

    function it_can_replace_a_single_character_in_a_string()
    {
        $pattern = 'b';
        $replacement = 'X';
        $subject = 'abc';

        $this->replaceChar($pattern, $replacement, $subject)->shouldReturn('aXc');

        $pattern = 'r';
        $replacement = 'R';
        $subject = 'reamldigital';
        $this->replaceChar($pattern, $replacement, $subject)->shouldReturn('Reamldigital');
    }
}
