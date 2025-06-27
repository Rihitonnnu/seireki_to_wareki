<?php

use SeirekiToWareki\YearConverter;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class YearConverterTest extends TestCase
{
    #[Test]
    public function 西暦から和暦への変換が正しく行われること()
    {
        $yearConverter = new YearConverter();
        $this->assertEquals($yearConverter->seirekiToWareki(2023), '令和5年');
    }

    #[Test]
    public function 和暦から西暦への変換が正しく行われること()
    {
        $yearConverter = new YearConverter();
        $this->assertEquals($yearConverter->warekiToSeireki('令和5年'), 2023);
    }
}
