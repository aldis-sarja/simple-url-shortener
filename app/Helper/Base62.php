<?php

namespace App\Helper;

class Base62
{
    const BASE62_CODE_TABLE = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    const DEC_CODE_TABLE = [
        '0' => 0,
        '1' => 1,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        'a' => 10,
        'b' => 11,
        'c' => 12,
        'd' => 13,
        'e' => 14,
        'f' => 15,
        'g' => 16,
        'h' => 17,
        'i' => 18,
        'j' => 19,
        'k' => 20,
        'l' => 21,
        'm' => 22,
        'n' => 23,
        'o' => 24,
        'p' => 25,
        'q' => 26,
        'r' => 27,
        's' => 28,
        't' => 29,
        'u' => 30,
        'v' => 31,
        'w' => 32,
        'x' => 33,
        'y' => 34,
        'z' => 35,
        'A' => 36,
        'B' => 37,
        'C' => 38,
        'D' => 39,
        'E' => 40,
        'F' => 41,
        'G' => 42,
        'H' => 43,
        'I' => 44,
        'J' => 45,
        'K' => 46,
        'L' => 47,
        'M' => 48,
        'N' => 49,
        'O' => 50,
        'P' => 51,
        'Q' => 52,
        'R' => 53,
        'S' => 54,
        'T' => 55,
        'U' => 56,
        'V' => 57,
        'W' => 58,
        'X' => 59,
        'Y' => 60,
        'Z' => 61
    ];

    public static function encode(int $number): string
    {
        if ($number === 0) {
            return "0";
        }

        $res = "";

        while ($number > 0) {
            $res = self::BASE62_CODE_TABLE[$number % 62] . $res;
            $number = intdiv($number, 62);
        }
        return $res;
    }

    public static function decode(string $base62Number): ?int
    {
        $res = 0;
        foreach (str_split($base62Number) as $digit) {
            $dec = self::DEC_CODE_TABLE[$digit] ?? null;
            if ($dec === null) {
                return null;
            }
            $res = $res * 62 + $dec;
        }
        return $res;
    }
}
