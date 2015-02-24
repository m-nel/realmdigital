<?php namespace Mnel\Realmdigital\Five;

class IntegerSorter
{
    public function sortIntegers($integers)
    {
        $length = sizeof($integers);

        for ($position = 1; $position < $length; $position++) {
            $element = $integers[ $position ];

            $integers = $this->sortElementAtPosition($integers, $element, $position);
        }

        return $integers;
    }

    /**
     * @param $integers
     * @param $position
     * @param $element
     * @return array
     */
    protected function sortElementAtPosition($integers, $element, $position)
    {
        $newPosition = $position;

        // Not at the end of array & the smaller than the left element
        while ($newPosition > 0 && $integers[ $newPosition - 1 ] > $element) {
            // shift the elements right
            $integers[ $newPosition ] = $integers[ $newPosition - 1 ];
            // move to next position
            $newPosition--;
        }

        //put the element at new position
        $integers[ $newPosition ] = $element;

        return $integers;
    }
}
