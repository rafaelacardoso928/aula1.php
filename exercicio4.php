<?php
$ano = date("Y");
?>
<!DOCTYPE html>
<html>
<body>

<p>Ano atual: <?= $ano ?></p>

<?php if ($ano >= 2025): ?>
    <p>Sistema Atualizado</p>
<?php else: ?>
    <p>Sistema Antigo</p>
<?php endif; ?>

</body>
</html>