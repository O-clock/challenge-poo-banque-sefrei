<?php

require("Client.php");
// require(Compte.php);

// Rédigez ici le programme de test de vos classes
$client1 = new Client("12345678","coyer", "Séverine", "0677070911");
echo $client1->afficher();
// 1. créez des clients, initialisez les, affichez les

$client2 = new Client('1223', 'Golo', 'Marcel');
echo $client2->afficher();
// 2. créez des comptes, manipulez les à l'aide des gonctions créées (en utilisant éventuellement les clients créés plus haut)
