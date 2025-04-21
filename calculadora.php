<form method="POST">
  <input type="number" name="valor1" required>
  <select name="operacao">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="valor2" required>
  <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case '+': $resultado = $valor1 + $valor2; break;
        case '-': $resultado = $valor1 - $valor2; break;
        case '*': $resultado = $valor1 * $valor2; break;
        case '/': $resultado = $valor2 != 0 ? $valor1 / $valor2 : 'Erro: divisão por zero'; break;
        default: $resultado = 'Operação inválida';
    }

    echo "<p>Resultado: $resultado</p>";
}
?>
