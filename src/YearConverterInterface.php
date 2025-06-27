<?php

declare(strict_types=1);

namespace SeirekiToWareki;

interface YearConverterInterface
{
    /**
     * 西暦を和暦に変換する
     *
     * @param int $year 西暦年
     * @return string 和暦年
     */
    public function seirekiToWareki(int $year): string;

    /**
     * 和暦を西暦に変換する
     *
     * @param string $wareki 和暦年
     * @return int 西暦年
     */
    public function warekiToSeireki(string $wareki): int;
}
