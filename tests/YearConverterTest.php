<?php

use SeirekiToWareki\YearConverter;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class YearConverterTest extends TestCase
{
    private YearConverter $yearConverter;
    
    public function setUp(): void
    {
        parent::setUp();

        $this->yearConverter = new YearConverter();
    }

    #[Test]
    public function 西暦から和暦への変換が正しく行われること()
    {
        $this->assertEquals('令和5年', $this->yearConverter->seirekiToWareki(2023));
    }

    #[Test]
    public function 和暦から西暦への変換が正しく行われること()
    {
        $yearConverter = new YearConverter();
        $this->assertEquals(2023, $this->yearConverter->warekiToSeireki('令和5年'));
    }
}
