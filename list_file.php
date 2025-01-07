<h3>list file</h3>

<?php
$arry = scandir('.');

?>

<ul>
    <?php 
        foreach($arry as $item){
            echo "<li>$item<li>";
        }
        
    ?>


</ul>