<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../public/css/style.css">
    <title><?= isset($title) ? $title : 'Sans titre'; ?></title>
</head>
<body>
    faire description et titre
    <nav>
        <a href="/">Index</a>
        <a href="/cours">Liste des cours</a>
        <a href="/professeurs">Liste des professeurs</a>
    </nav>
    <div class="container">
        <?= $content ?>
    </div>
</body>
</html>