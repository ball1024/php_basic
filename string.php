<?php

$name = "Ball";
echo $name;
?>

<h3>String functions</h3>

<div>Count: <?php echo strlen($name)?></div>
<div>Index Of: <?php echo strpos($name, "a")?></div>
<div>Upper Case: <?php echo strtoupper($name)?></div>
<div>Lower Case: <?php echo strtolower($name)?></div>
<div>Replace: <?php echo str_replace("Ball", "Thanaball", $name)?></div>
<div>Substring: <?php echo substr($name, 0, 3)?></div>
