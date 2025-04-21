<form method="POST">
  <input type="text" name="nome" placeholder="Seu nome" required>
  <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
  <button type="submit">Enviar</button>
</form>

<?php
$arquivo = "mensagens.txt";

if ($_POST) {
    $linha = $_POST['nome'] . ": " . $_POST['mensagem'] . "\n";
    file_put_contents($arquivo, $linha, FILE_APPEND);
    echo "<p>Mensagem salva!</p>";
}

if (file_exists($arquivo)) {
    echo "<h3>Mensagens recebidas:</h3><ul>";
    foreach (file($arquivo) as $msg) {
        echo "<li>" . htmlspecialchars($msg) . "</li>";
    }
    echo "</ul>";
}
?>
