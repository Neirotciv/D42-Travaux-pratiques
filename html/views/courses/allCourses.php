<?php 
extract(['courses']); 
$title = "Tout les cours";
ob_start();
?>
    
<?php foreach($courses as $course): ?>
    <div class="card">
        <a href="/cours/<?= $course->id ?>">
            <img src="./public/img/courses/<?= $course->img ?>" alt="">
            <div class="details">
                <h2><?= $course->code ?></h2>
                <h3><?= $course->title ?><h3>
            </div>
        </a>
    </div>  
<?php endforeach ?>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>

<pre>
    <?php var_dump($courses); ?>
</pre>