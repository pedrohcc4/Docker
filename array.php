use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testArrayContemValor()
    {
        $frutas = ['maçã', 'banana', 'laranja'];
        $this->assertContains('banana', $frutas);
    }
}
