<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Notas</title>
</head>
<body>
  <h2>Informe a disciplina e a nota</h2>
  <form action="calcula_nota.php" method="POST">
    Disciplina: <input type="text" name="disciplina" required><br><br>
    Nota: <input type="number" step="0.1" name="nota" required><br><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
