<?php namespace Mnel\Realmdigital\Four;

class DuplicateIdentifier
{
    public function findMatchingValues($integersA, $integersB)
    {
        $matches = [];

        foreach ($integersA as $intA) {
            if (in_array($intA, $integersB)) {
                $matches[] = $intA;
            }
        }

        return $matches;
    }
}
