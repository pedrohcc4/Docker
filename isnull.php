use PHPUnit\Framework\TestCase;

class NullTest extends TestCase
{
    public function testVariavelNula()
    {
        $valor = null;
        $this->assertNull($valor);
    }
}
