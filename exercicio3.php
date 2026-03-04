<?php
$nome = "Lucas";

function saudacao($nome) {
    return "Olá, " . $nome . "! Seja bem-vindo(a).";
}
?>
<!DOCTYPE html>
<html>
<body>

<p><?= saudacao($nome); ?></p>

</body>
</html>