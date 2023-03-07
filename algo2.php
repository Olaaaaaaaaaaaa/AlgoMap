<?php

$carte = [
    "entree" => [
        "nom" => "Salade",
        "description" => "Une salade quoi",
        "prix" => "4€"
    ],
    "plat" => [
        "nom" => "Pate",
        "description" => "Des pates quoi",
        "prix" => "8€"
    ],
    "dessert" => [
        "nom" => "Flan",
        "description" => "Un flan quoi",
        "prix" => "6€"
    ]
];

echo $carte["entree"]["nom"];
