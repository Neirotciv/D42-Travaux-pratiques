<?php 
extract(['course']); 
ob_start();
?>

<div class="details">
    <img src="/public/img/courses/<?= $course->img; ?>" alt="<?= $course->alt; ?>">
    <h3><?= $course->title . ' - ' . $course->code; ?></h3>
    <p><?= $course->description; ?></p>
    <hr>
    <p><?= $course->firstname . ' ' . $course->lastname . ' - ' . $course->trigram; ?></p>
</div>

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>