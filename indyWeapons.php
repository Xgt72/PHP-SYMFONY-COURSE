<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0, 2)];
$indyWeapon = '???';

switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = 'gun';
        break;
    case 'whip':
        $indyWeapon = 'fists';
        break;
    case 'gun':
        $indyWeapon = 'whip';
        break;
}

echo 'l\'arme d\'Indy est: ' . $indyWeapon . ', elle bat celle de son adversaire qui est: ' . $opponentWeapon . '.';
