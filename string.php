use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testStringContemPalavra()
    {
        $frase = "Olá mundo!";
        $this->assertStringContainsString('mundo', $frase);
    }
}
