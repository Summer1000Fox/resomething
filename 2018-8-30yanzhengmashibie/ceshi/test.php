<?php

include ('Valite.php');
$pName = '4.jpeg';
$valite = new Valite();
$valite->setImage($pName);
$valite->getHec();
$ert = $valite->run();
//$ert = "1234";
print_r($ert);
echo '<br><img src='.$pName.'><br>';

?>