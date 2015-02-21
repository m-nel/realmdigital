<?php namespace Mnel\Realmdigital\Two;

class PalindromeIdentifier
{
    public function checkString($string)
    {
        $loweredString = strtolower($string);
        $subject = preg_replace("/[^A-z]/", '', $loweredString);
        $reversedSubject = strrev($subject);

        for ($i = 0; $i < strlen($subject); $i++) {
            if ($subject{$i} != $reversedSubject{$i}) {
                return false;
            }
        }

        return true;
    }
}
