<?php namespace Mnel\Realmdigital\Five;

class SingleOccurrenceIdentifier
{
    public function identifyArray(array $integers)
    {
        $integerCounts = $this->countOccurances($integers);

        return $this->onlySingleOccurances($integerCounts);
    }

    /**
     * Counts the number of occurrances of each integer in the array
     * @param $integers
     * @return array
     */
    protected function countOccurances(array $integers)
    {
        $integerCounts = [];

        foreach ($integers as $int) {
            if ( ! isset($integerCounts[ $int ])) {
                $integerCounts[ $int ] = 1;
            }
            else {
                $integerCounts[ $int ] = ++$integerCounts[ $int ];
            }
        }

        return $integerCounts;
    }

    /**
     * Filters out all integers with a count equal to 1
     * @param $integerCounts
     * @return array
     */
    protected function onlySingleOccurances($integerCounts)
    {
        $singleOccuranceIntegers = [];

        foreach ($integerCounts as $int => $count) {
            if ($count === 1) {
                $singleOccuranceIntegers[] = $int;
            }
        }

        return $singleOccuranceIntegers;
    }
}
