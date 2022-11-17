<?php 
extract(['course']); 
ob_start();
?>
    
<img src="./public/img/courses/<?= $course->img ?>" alt="">

<?php 
$content = ob_get_clean();
require('views/layout.php');
?>

<pre>
    <?php var_dump($course); ?>
</pre>