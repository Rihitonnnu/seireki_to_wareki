<?php

declare(strict_types=1);

namespace SeirekiToWareki;

class YearConverter implements YearConverterInterface
{
    public function seirekiToWareki(int $year): string
    {
        if ($year < 1868) {
            throw new \InvalidArgumentException('西暦年は1868年以降でなければなりません。');
        }

        if ($year >= 2019) {
            return '令和' . ($year - 2018) . '年';
        } elseif ($year >= 1989) {
            return '平成' . ($year - 1988) . '年';
        } elseif ($year >= 1926) {
            return '昭和' . ($year - 1925) . '年';
        } elseif ($year >= 1912) {
            return '大正' . ($year - 1911) . '年';
        } else {
            return '明治' . ($year - 1867) . '年';
        }
    }

    public function warekiToSeireki(string $wareki): int
    {
        if (preg_match('/^(令和|平成|昭和|大正|明治)(\d+)年$/u', $wareki, $matches)) {
            $era = $matches[1];
            $year = (int)$matches[2];

            switch ($era) {
                case '令和':
                    return 2018 + $year;
                case '平成':
                    return 1988 + $year;
                case '昭和':
                    return 1925 + $year;
                case '大正':
                    return 1911 + $year;
                case '明治':
                    return 1867 + $year;
                default:
                    throw new \InvalidArgumentException('不正な和暦形式です。');
            }
        } else {
            throw new \InvalidArgumentException('不正な和暦形式です。');
        }
    }
}
