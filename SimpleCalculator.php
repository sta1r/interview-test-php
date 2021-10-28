<?php

/**
 * This class encapsulates the logic to return the result of a calculation represented as a string
 *
 * It only supports addition and subtraction
 * It does not support multiplication, division, brackets or indices
 *
 * Example input:
 * "1 + 1 - 10 + 45"
 *
 * There will always be a space between operands and will always be a valid input
 * No other text/characters are to be expected.
 *
 */
class SimpleCalculator
{
    /**
     * Returns the result of a calculation represented as a string
     *
     * @param string $calculation
     * @return int
     * @throws Exception
     */
    public static function calculate(string $calculation) : int
    {
        throw new Exception("Not implemented");
    }
}
