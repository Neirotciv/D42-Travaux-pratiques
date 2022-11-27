<?php 
extract(['courses']); 
$title = "Tout les cours";
ob_start();
?>

<h1>Liste des cours</h1>
<div class="cards-container">
    <?php foreach($courses as $course):
        if (strlen($course->title) > 20) {
            $course->title = substr($course->title, 0, 18) . '...';
        }?>
        <div class="card">
            <a href="/cours/<?= $course->id ?>">
                <img src="./public/img/courses/<?= $course->img ?>" alt="<?= $course->alt ?>">
                <div class="details">
                    <h2><?= $course->code ?></h2>
                    <h3><?= $course->title ?><h3>
                    <h3><?= $course->trigram ?><h3>
                </div>
            </a>
        </div>  
    <?php endforeach ?>
</div>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>