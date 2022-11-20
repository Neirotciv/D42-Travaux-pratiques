<?php 
extract(['users', 'lines']);
ob_start();
?>

<?php for($i=0; $i < $lines; $i++): ?>
    <div class="row">
        <?php foreach($users as $user): ?>
            <div>
            <a href="/professeur/<?= $user->id; ?>">
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
<?php endfor ?>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>

<pre>
    <?php var_dump($users); ?>
</pre>