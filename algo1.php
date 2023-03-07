<?php

$resto = [
    "nom" => "ODelice",
    "adresse" => [
        "numero" => 93,
        "voirie" => "rue de la pierre",
        "code postal" => "60007",
        "ville" => "lyon",
        "pays" => "france"
    ]
];

echo "Le restaurant ". $resto["nom"] . " est stitué dans la ville de  " . $resto["adresse"]["ville"] . " en ". $resto["adresse"]["pays"];

