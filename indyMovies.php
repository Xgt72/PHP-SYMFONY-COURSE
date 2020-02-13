<?php
$movies = [
    'Les Aventuriers de l\'Arche perdue' => [
        'Harrison Ford',
        'Karren Allen',
        'Paul Freeman'
    ],
    'Indiana Jones et le Temple maudit' => [
        'Harrison Ford',
        'Kate Capshaw',
        'Jonathan Ke Quan'
    ],
    'Indiana Jones et la Dernière Croisade' => [
        'Harrison Ford',
        'Sean Connery',
        'Denholm Elliott'
    ]
];

foreach ($movies as $movie => $actors) {
    $actorsList = implode(', ', $actors);
    echo '<p>Dans le film ' . $movie . ', les principaux acteurs sont: ' . $actorsList . '.</p>' . "\n";
}
