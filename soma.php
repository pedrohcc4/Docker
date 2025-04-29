use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testSoma()
    {
        $resultado = 2 + 3;
        $this->assertEquals(5, $resultado);
    }
}
