<?php
$nota = 6.5;
?>
<!DOCTYPE html>
<html>
<head>
<style>
.aprovado { color: green; font-weight: bold; }
.reprovado { color: red; font-weight: bold; }
</style>
</head>
<body>

<p>Nota: <?= $nota ?></p>

<?php if ($nota >= 7): ?>
    <p class="aprovado">Aprovado</p>
<?php else: ?>
    <p class="reprovado">Reprovado</p>
<?php endif; ?>

</body>
</html>