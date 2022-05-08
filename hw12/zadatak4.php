<?php
$i=3;
$j=100;
$count=0;

for ($i=3;$i<=$j+=1;$i+=3) {
    $count++;
    echo "Dan $count:  Puz je presao $i cm, a drvo je visoko $j cm. <br>";
}
  
echo " <b> Puz se popeo na drvo za $count dana! </b>";
?>
