<?php 
extract(['user']);
ob_start();
?>

<div class="details">
    <img src="/public/img/avatars/<?= $user->avatar; ?>" alt="<?= $user->alt; ?>">
        <h2><?= $user->firstname . ' ' . $user->lastname; ?></h2>
        <span>Téléphone : <?= $user->phone; ?></span>
        <span>Adresse : <?= $user->address; ?></span>
    </div>
</div>


<?php 
$content = ob_get_clean();
require('views/layout.php');
?>