<?php
// Variáveis
$nome = "Fernanda";
$cidade = "Recife";
$curso = "Engenharia de Software";

// Concatenação
$frase = "Aluno(a): " . $nome . " - Curso: " . $curso;

// Função
function mensagemBoasVindas($nome) {
    return "Seja bem-vindo(a), " . $nome . "!";
}

// Condicional
$ano = date("Y");
?>
<!DOCTYPE html>
<html>
<body>

<h2><?= $nome ?></h2>

<?php echo $frase; ?>

<p><?= mensagemBoasVindas($nome); ?></p>

<?php if ($ano >= 2025): ?>
    <p>Sistema Atualizado</p>
<?php else: ?>
    <p>Sistema Antigo</p>
<?php endif; ?>

</body>
</html>