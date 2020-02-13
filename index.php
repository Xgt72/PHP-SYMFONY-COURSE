<?php
function writeSecretSentence(string $firstAnimal, string $secondAnimal): string
{
    $secretSentence = $firstAnimal . " s'incline face à " . $secondAnimal;
    return $secretSentence;
}

echo writeSecretSentence('lion', 'lune');
echo writeSecretSentence('loup', 'feu');
