

<?php



$newEntite = new Entite($mabase);



echo '<div class="testUnitaire"><p>Test 1 Lecture d\'un Entite de type Perso </p>';
$newEntite->setEntiteById(1);
$newEntite->getNom();
$newEntite->getBardeVie();
$newEntite->renderHTML();

echo "</div>";


echo '<div class="testUnitaire"><p>Test 2 Lecture d\'un Entite de type Mob </p>';
$newEntite->setEntiteById(460);
$newEntite->getNom();
$newEntite->getBardeVie();
$newEntite->renderHTML();

echo "</div>";





?>




