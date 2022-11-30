<?php 
$title = "Tout les professeurs";
ob_start();
?>

<h1>Liste des utilisateurs</h1>
<div class="cards-container">
    <?php foreach($users as $key => $user): ?>
            <a href="/utilisateur/<?= $user->id; ?>">
                <div class="card">
                    <img src="/public/img/avatars/<?= $user->avatar ?>" alt="avatar of <?= $user->firstname ?>">
                    <div class="details">
                        <h2><?= $user->firstname . ' ' . $user->lastname; ?></h2>
                        <h3><?= $user->role; ?></h3>
                    </div>
                </div>  
            </a>
        <?php if (($key+1) % 3 == 0): ?><br><?php endif; ?>
    <?php endforeach ?>
</div>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>