<?php 
extract(['users', 'lines']);
$title = "Tout les professeurs";
ob_start();
?>

<h1>Liste des utilisateurs</h1>
<div class="cards-container">
    <?php foreach($users as $user): ?>
        <div>
        <a href="/utilisateur/<?= $user->id; ?>">
            <div class="card">
                <img src="/public/img/avatars/<?= $user->avatar ?>" alt="">
                <div class="details">
                    <h2><?= $user->firstname . ' ' . $user->lastname; ?></h2>
                    <h3><?= $user->role; ?></h3>
                </div>
            </div>  
        </a>
        </div>
    <?php endforeach ?>
</div>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>