<?php
$tijd = date("H");

if ($tijd >= 6 and $tijd <12) {
    echo "Het is ochtend.";
} elseif ($tijd >= 12 and $tijd < 18) {
    echo "Het is middag.";
} elseif ($tijd >= 18 and $tijd == 23) {
    echo "Het is avond.";
} elseif ( $tijd == 0 or $tijd <6) {
    echo "Het is nacht.";
}

