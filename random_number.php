<h3>random_number</h3>

<?php

echo rand(1, 100);
?>

<h3>Random Encrypt Hash Code</h3>

<?php

echo md5(uniqid(rand(), true));


?>

<br>

<?php


echo md5(md5(uniqid('12346'), true));

?>
