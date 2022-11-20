<?php 
extract(['user']);
ob_start();
?>

<div class="card">
    <img src="/public/img/avatars/<?= $user->avatar; ?>" alt="<?= $user->alt; ?>">
    <div class="details">
        <h2><?= $user->firstname . ' ' . $user->lastname; ?></h2>
        <p><?= $user->phone; ?></p>
        <p><?= $user->address; ?></p>
    </div>
</div>


<?php 
$content = ob_get_clean();
require('views/layout.php');
?>

<pre>
<?php print_r($user); ?>
</pre>