<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <h3 class="trigger accept"><?= $title ?></h3>
    </header>

<?php if ($v->section("nav")): ?>
    <nav class="trigger info"><?= $v->section("nav"); ?></nav>
<?php else: ?>
    <p class="trigger info">Lista de usuários</p>
<?php endif; ?>

<?= $v->section("content"); ?>

</body>
</html>