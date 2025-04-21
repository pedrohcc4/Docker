<form method="POST">
  <input type="text" name="titulo" placeholder="Título" required>
  <input type="text" name="autor" placeholder="Autor" required>
  <button type="submit">Salvar</button>
</form>

<?php
$arquivo = "livros.txt";

if ($_POST) {
    $linha = $_POST['titulo'] . " - " . $_POST['autor'] . "\n";
    file_put_contents($arquivo, $linha, FILE_APPEND);
}

if (file_exists($arquivo)) {
    echo "<h2>Livros cadastrados:</h2><ul>";
    $livros = file($arquivo);
    foreach ($livros as $livro) {
        echo "<li>" . htmlspecialchars($livro) . "</li>";
    }
    echo "</ul>";
}
?>
