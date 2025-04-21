<form method="POST">
  <input type="text" name="tarefa" required placeholder="Digite uma tarefa">
  <button type="submit">Adicionar</button>
</form>

<?php
$arquivo = "tarefas.txt";

if ($_POST && !empty($_POST['tarefa'])) {
    file_put_contents($arquivo, $_POST['tarefa'] . "\n", FILE_APPEND);
}

if (file_exists($arquivo)) {
    echo "<h3>Minhas Tarefas:</h3><ul>";
    foreach (file($arquivo) as $tarefa) {
        echo "<li>" . htmlspecialchars($tarefa) . "</li>";
    }
    echo "</ul>";
}
?>
