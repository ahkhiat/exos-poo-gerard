<?php

include('./Personne.php');
include('./Compte.php');
include('./Mammifere.php');
include('./Forme.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercices class Personne</h1>

<?php

/* --------------------------- exercice 1 Personne -------------------------- */
// $personne1 = new Personne('Mustapha', '34');
// echo $personne1->get_infos();


/* ----------------------- exercice 2 Compte Bancaires ---------------------- */
// $compte1 = new CompteBancaire('Thierry', '150');

// $compte1->crediter('100');
// echo '<br>';

// $compte1->debiter('50');
// echo '<br>';

// $compte1->debiter('150');
// echo '<br>';

// $compte1->debiter('60');


/* -------------------------- exercice 3 Mammifere -------------------------- */
// $animal1 = new Mammifere('chat', '4');
// $animal1->affiche();

// echo '<br>';

// $chien1 = new Chien('Woody', '6');
// $chien1->affiche();
// echo '<br>';

// $chien1->aboyer();

/* ---------------------------- exercice 4 Forme ---------------------------- */

$forme1 = new Carre('10', '10');

$forme1->afficheArea();
echo '<br>';

$rectangle = new Rectangle('17', '12');

$rectangle->afficheArea();


/* ---------------------------- fin des exercices --------------------------- */


?>
    
</body>
</html>