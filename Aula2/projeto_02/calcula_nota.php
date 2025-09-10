<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disciplina = $_POST["disciplina"];
    $nota = floatval($_POST["nota"]);

    echo "<h2>Resultado</h2>";
    echo "Disciplina: <strong>$disciplina</strong><br>";
    echo "Nota: <strong>$nota</strong><br>";

    if ($nota >= 7) {
        echo "<p style='color:green;'>Situação: Aprovado </p>";
    } elseif ($nota >= 5) {
        echo "<p style='color:orange;'>Situação: Recuperação </p>";
    } else {
        echo "<p style='color:red;'>Situação: Reprovado </p>";
    }
} else {
    echo "Acesse pelo formulário!";
}
?>
