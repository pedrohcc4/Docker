use PHPUnit\Framework\TestCase;

class ExcecaoTest extends TestCase
{
    public function testExcecaoEsperada()
    {
        $this->expectException(InvalidArgumentException::class);

        throw new InvalidArgumentException("Erro de argumento inválido");
    }
}
