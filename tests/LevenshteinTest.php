<?php
declare(strict_types=1);

namespace GordonLesti\LevenshteinTest;

use GordonLesti\Levenshtein\Levenshtein;
use PHPUnit\Framework\TestCase;

/**
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class LevenshteinTest extends TestCase
{
    /**
     * @dataProvider levenshteintProvider
     */
    public function testLevenshtein(array $args, $result)
    {
        $this->assertSame($result, Levenshtein::levenshtein(...$args));
    }

    public function levenshteintProvider(): array
    {
        return [
            [["", ""], 0.0],
            [["", "AAAB"], 4.0],
            [["CACC", ""], 4.0],
            [["ABCA", "BBCB"], 2.0],
            [["AC", "ABAA"], 3.0],
            [["CAAA", "AA"], 2.0],
            [["", "", 2, 9, 5], 0.0],
            [["", "BBBB", 8, 3, 2], 32.0],
            [["BACA", "", 3, 7, 2], 8.0],
            [["CCAA", "BCCA", 9, 4, 8], 8.0],
            [["ACCB", "BC", 7, 9, 2], 13.0],
            [["CA", "AABC", 1, 4, 6], 6.0],
            [["♫⚓⚓♥", "♫♥⚓♫⚓♫"], 3.0],
        ];
    }
}
