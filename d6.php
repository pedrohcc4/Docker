<form method="POST">
  <button type="submit" name="rolar">Rolar dado 🎲</button>
</form>

<?php
if (isset($_POST['rolar'])) {
    $dado = rand(1, 6);
    echo "<h2>Você tirou: $dado</h2>";
}
?>
