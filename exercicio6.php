<?php
$preco = 150;
$precoFormatado = number_format($preco, 2, ",", ".");
?>
<!DOCTYPE html>
<html>
<body>

<p>Preço do produto: R$ <?= $precoFormatado ?></p>

</body>
</html>