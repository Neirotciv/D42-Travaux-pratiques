<?php 
extract(['course']); 
ob_start();
?>

<div class="details">
    <img src="/public/img/courses/<?= $course->img; ?>" alt="<?= $course->alt; ?>">
    <h3><?= $course->title . ' - ' . $course->code; ?></h3>
    <p><?= $course->description; ?></p>
    <hr>
    <span><?= $course->firstname . ' ' . $course->lastname . ' - ' . $course->trigram; ?></span>
</div>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>