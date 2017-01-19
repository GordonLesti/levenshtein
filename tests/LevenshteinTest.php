<?php
declare(strict_types=1);

namespace GordonLesti\LevenshteinTest;

use \GordonLesti\Levenshtein\Levenshtein;

/**
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.StaticAccess)
 */
class LevenshteinTest extends \PHPUnit_Framework_TestCase
{
    public function testGetDistanceDefaultCost()
    {
        $this->assertSame(0.0, Levenshtein::levenshtein("", ""));
    }

    public function testGetDistanceL0L4()
    {
        $this->assertSame(4.0, Levenshtein::levenshtein("", "AAAB"));
    }

    public function testGetDistanceL4L0()
    {
        $this->assertSame(4.0, Levenshtein::levenshtein("CACC", ""));
    }

    public function testGetDistanceL4L4()
    {
        $this->assertSame(2.0, Levenshtein::levenshtein("ABCA", "BBCB"));
    }

    public function testGetDistanceL2L4()
    {
        $this->assertSame(3.0, Levenshtein::levenshtein("AC", "ABAA"));
    }

    public function testGetDistanceL4L2()
    {
        $this->assertSame(2.0, Levenshtein::levenshtein("CAAA", "AA"));
    }

    public function testGetDistanceL0L0I2R9D5()
    {
        $this->assertSame(0.0, Levenshtein::levenshtein("", "", 2, 9, 5));
    }

    public function testGetDistanceL0L4I8R3D2()
    {
        $this->assertSame(32.0, Levenshtein::levenshtein("", "BBBB", 8, 3, 2));
    }

    public function testGetDistanceL4L0I3R7D2()
    {
        $this->assertSame(8.0, Levenshtein::levenshtein("BACA", "", 3, 7, 2));
    }

    public function testGetDistanceL4L4I9R4D8()
    {
        $this->assertSame(8.0, Levenshtein::levenshtein("CCAA", "BCCA", 9, 4, 8));
    }

    public function testGetDistanceL4L2I7R9D2()
    {
        $this->assertSame(13.0, Levenshtein::levenshtein("ACCB", "BC", 7, 9, 2));
    }

    public function testGetDistanceL2L4I1R4D6()
    {
        $this->assertSame(6.0, Levenshtein::levenshtein("CA", "AABC", 1, 4, 6));
    }

    public function testGetDistanceL4L4UTF8()
    {
        $this->assertSame(3.0, Levenshtein::levenshtein("♫⚓⚓♥", "♫♥⚓♫⚓♫"));
    }
}
