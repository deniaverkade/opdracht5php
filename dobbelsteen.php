<?php
$dobbel = rand(1,6);

if ($dobbel >= 4 and $dobbel <=5) {
    echo "U heeft gewonnen. Gerolde getal: " . $dobbel;
} elseif ($dobbel == 6) {
    echo "Gefeliciteerd! U heeft een 6 gerold. Gerolde getal: " . $dobbel;
} else {
   echo "U heeft verloren. Gerolde getal: " . $dobbel;
}
?>