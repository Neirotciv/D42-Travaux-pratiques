<?php 
extract(['user']);
ob_start();
?>

<!-- <div class="card">
    <img src="./public/img/avatars/<?= $user->avatar; ?>" alt="">
    <div class="details">
        <h2><?= $user->firstname . ' ' . $user->lastname; ?></h2>
        <p><?= $user->trigram; ?></p>
    </div>
</div> -->

<?php echo $user->lastname; ?>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>

<pre>
<?php print_r($user); ?>
</pre>