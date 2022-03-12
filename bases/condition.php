<?php
$action = (int)readline('Entrer votre action (1-attaquer, 2-défendre, 3-passer son tour) = ');
if ($action === 1) {
    echo 'Ouh, j\'attaque';
} elseif ($action === 2) {
    echo 'Aie, je défends';
} elseif ($action === 3) {
    echo 'Eh, je passe mon tour';
} else {
    echo 'Unknown';
} 