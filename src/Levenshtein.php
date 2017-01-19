<?php
declare(strict_types=1);

namespace GordonLesti\Levenshtein;

class Levenshtein
{
    public static function levenshtein(
        string $str1,
        string $str2,
        float $costIns = 1.0,
        float $costRep = 1.0,
        float $costDel = 1.0
    ): float {
        $matrix = [];
        $str1Length = mb_strlen($str1);
        $str2Length = mb_strlen($str2);
        $str1Array = [];
        for ($i = 0; $i < $str1Length; $i++) {
            $str1Array[$i] = mb_substr($str1, $i, 1);
        }
        $str2Array = [];
        for ($j = 0; $j < $str2Length; $j++) {
            $str2Array[$j] = mb_substr($str2, $j, 1);
        }
        $row = [];
        $row[0] = 0.0;
        for ($j = 1; $j < $str2Length + 1; $j++) {
            $row[$j] = $j * $costIns;
        }
        $matrix[0] = $row;
        for ($i = 0; $i < $str1Length; $i++) {
            $row = [];
            $row[0] = ($i + 1) * $costDel;
            for ($j = 0; $j < $str2Length; $j++) {
                    $row[$j + 1] = min(
                        $matrix[$i][$j + 1] + $costDel,
                        $row[$j] + $costIns,
                        $matrix[$i][$j] + ($str1Array[$i] === $str2Array[$j] ? 0.0 : $costRep)
                    );
            }
            $matrix[$i + 1] = $row;
        }

        return $matrix[$str1Length][$str2Length];
    }
}
