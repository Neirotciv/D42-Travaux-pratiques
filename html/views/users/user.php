<?php extract(['teacher']); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <?= $teacher->firstname; ?>
        </di>
    </div>
</body>
</html>

<pre>
<?php print_r($teacher); ?>
</pre>