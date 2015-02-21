<?php namespace Mnel\Realmdigital\One;

class StringReplacer
{
    public function replaceChar($pattern, $replacement, $subject)
    {
        $subjectChars = str_split($subject);
        $resultingSubject = '';

        foreach ($subjectChars as $char) {
            $resultingSubject .= $this->replaceMatchingCharacter($pattern, $char, $replacement);
        }

        return $resultingSubject;
    }

    /**
     * @param $pattern
     * @param $char
     * @param $replacement
     *
     * @return string
     */
    protected function replaceMatchingCharacter($pattern, $char, $replacement)
    {
        if ($char == $pattern) {
            return $replacement;
        }

        return $char;
    }
}
