<?php

$carte = [
    "Entrées" => [
        [
            "nom" => "Mezzé mixte simple",
            "description" => "samboussek fromage, kebbe, taboule",
            "prix" => "12.90€",
            "allergene" => [
                "lait",
                "céleri",
                "blé"
            ]
        ],
        [
            "nom" => "Carpaccio de boeuf/buratta",
            "description" => "tomate sechée, roquettes, huile d'olive, parmesan",
            "prix" => "16.90€",
            "allergene" => [
                "lait",
                "oeuf"
            ]
        ]
    ],
    "Plats" => [
        [
            "nom" => "Pates au magret de canard",
            "description" => "linguines, emincés de magret de canard, sauce aux cepes",
            "prix" => "20.90€",
            "allergene" => [
                "poisson"
            ]
        ],
        [
            "nom" => "Chick taouk",
            "description" => "2 brochettes de poulet marinnées à la libanaise, crème d'ail",
            "prix" => "17.90€",
            "allergene" => [
                "fruit à coque"
            ]
        ]
        ],
    "Dessert" => [
        [
            "nom" => "Fondant chocolat",
            "description" => "Gateau fondant au chocolat coulant",
            "prix" => "9.90€",
            "allergene" => [
                "arachide"
            ]
        ],
        [
            "nom" => "Café gourmand",
            "description" => "Cappuchino avec du chocolat gourmand",
            "prix" => "11.90€",
            "allergene" => [
                "arachide"
            ]
        ]
    ]
];


echo "<section>\n";
foreach ($carte as $categorie => $liste_element){
    echo "  <header>".$categorie."</header>\n\n";
    foreach ($liste_element as $key => $element){
        echo "  <article>\n";
        echo "      <h2 class=\"nom_plat\">".$element["nom"]."</h2>\n";
        echo "      <p class=\"description\">".$element["description"]."</p>\n";
        echo "      <p class=\"prix\">".$element["prix"]."</p>\n";
        echo "      <p class=\"allergene\">"."Allergene"."</p>\n";
        foreach ($element["allergene"] as $keys => $elements){
            echo "          <p class=\"nom_allergene\">".$elements."</p>\n";
        }
        echo "  </article>\n\n";
    }
}
echo "</section>";