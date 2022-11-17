<?php 
extract(['teachers', 'lines']); 
echo $lines;
ob_start();
?>

<?php for($i=0; $i < $lines; $i++): ?>
    <div class="row">
        <?php foreach($teachers as $teacher): ?>
            <div>
            <a href="/professeur/<?= $teacher->id; ?>">
                <div class="card">
                    <img src="./public/img/avatars/<?= $teacher->avatar ?>" alt="">
                    <div class="details">
                        <h2><?= $teacher->firstname . ' ' . $teacher->lastname; ?></h2>
                        <h3><?= $teacher->role; ?></h3>
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
    <?php var_dump($teachers); ?>
</pre>