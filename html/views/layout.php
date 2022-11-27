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
    <header>
        <nav>
            <a href="/">Index</a>
            <a href="/cours">Cours</a>
            <a href="/utilisateurs">Utilisateurs</a>
        </nav>
    </header>
    <div class="container">
        <?= $content ?>
    </div>
</body>
</html>