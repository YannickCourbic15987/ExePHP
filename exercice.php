<?php

$tab = [15, 16, 0, 25, 2, 8, 10];

for ($i = 0; $i < count($tab); $i++) {
    echo " \$tab[$i] = " . $tab[$i] . " ";
}

//exercice 1 

//1) Afficher les valeurs >= 10 avec un printr
echo " <br/> Afficher les valeurs >= 10 avec un printr";
for ($i = 0; $i < count($tab); $i++) {

    if ($tab[$i] >= 10) {
        print_r("<br/>" . $tab[$i]  . "<br/>");
    }
}

echo "============================================= <br/>";

//2) afficher les valeurs entre 0 et 8 avec un print r

echo "afficher les valeurs entre 0 et 8 avec un print r";
for ($i = 0; $i < count($tab); $i++) {

    if ($tab[$i] > 0 && $tab[$i] < 8) {
        print_r("<br/>" . $tab[$i]  . "<br/>");
    }
}
echo "============================================= <br/>";
echo "afficher la somme des valeurs moins la permière valeur <br/> <br/> ";
$somme = 0;
for ($i = 0; $i < count($tab); $i++) {

    $somme = $somme + $tab[$i];
}
$resultat = $somme - $tab[0];
echo " somme - la première valeur = " . $resultat;
echo "<br/>=============================================<br/>";
echo "afficher les valeurs de la table multiplé par 2 <br/> <br/> ";


for ($i = 0; $i < count($tab); $i++) {

    echo $tab[$i] * 2 . "<br/>";
}
echo "<br/>=============================================<br/>";

echo "enma a une moyenne de " . $somme / count($tab) . "<br/>";
echo "======================================================<br/>";

$tab6 = [11, 2, 3, 4, 25, 450, 200, 150];
echo "parcourir le tableau , et si il ya des valeurs >= 100 les afficher et les multiplier par 6 <br/>";
echo "tab6 = [ ";
for ($i = 0; $i < count($tab6); $i++) {
    echo " " . $tab6[$i] . " , ";
}
echo "] <br/> <br/> ";

echo " si tab[\$i] >= 100 alors : ";
for ($i = 0; $i < count($tab6); $i++) {
    if ($tab6[$i] >= 100) {
        echo $tab6[$i] * 2 . " , ";
    }
}
echo "<br/>======================================================================<br/>";
echo "calculer la somme des valeurs si la somme des valeurs est supérieur à 600 alors afficher le text 'la somme est supérieur à 600 ' <br/>";
$somme = 0;
for ($i = 0; $i < count($tab6); $i++) {
    $somme = $somme + $tab6[$i];
}

if ($somme > 600) {
    echo "la somme est supérieur à 600 ";
}


echo "<br/> ============================================ <br/>";

$tableau = [11, 15, 100, 150, 699, 850, -10, -20, 100, -100, -200, 16];
$moyenne = [];
$inferieur = [];
$superieur = [];
for ($i = 0; $i < count($tableau); $i++) {
    if ($tableau[$i] < 20 && $tableau[$i] > 0) {
        $moyenne[] = $tableau[$i];
    }

    if ($tableau[$i] < 0) {
        $inferieur[] = $tableau[$i];
    }

    if ($tableau[$i] > 100) {
        $superieur[] = $tableau[$i];
    }
}

echo '1) tableau ne comprenant que des valeurs compris entre 0 et 20 ayant pour nom de variable $moyenne <br/>';

echo '$moyenne = [';
for ($i = 0; $i < count($moyenne); $i++) {
    echo " " . $moyenne[$i] . " , ";
}
echo '] <br/> <br/>';

echo '2) tableau ne comprenant que des valeurs compris inférieur à  0 ayant pour nom de variable $inferieur <br/>';

echo '$inferieur = [';
for ($i = 0; $i < count($inferieur); $i++) {
    echo " " . $inferieur[$i] . " , ";
}
echo ']<br/><br/>';
echo '3) tableau ne comprenant que des valeurs compris supérieur  à 100 ayant pour nom de variable $superieur <br/>';

echo '$inferieur = [';
for ($i = 0; $i < count($superieur); $i++) {
    echo " " . $superieur[$i] . " , ";
}
echo ']<br/><br/>';

echo "=================================================";

$alphabet = ["a", "b", "c", "d", "e"];
$alpha = [];
$delta = [];
$beta = [];
for ($i = 0; $i < count($alphabet); $i++) {
    if ($i < 4) {
        $alpha[] = $alphabet[$i];
    }
    if ($i > 0) {
        $beta[] = $alphabet[$i];
    }
    if ($i > 2 || $i < 2) {
        $delta[] = $alphabet[$i];
    }
}



echo '1) créer un nouveau tableau sans la lettre "e" ayant pour nom alpha <br/>';

echo '$alpha = [';
for ($i = 0; $i < count($alpha); $i++) {
    echo " " . $alpha[$i] . " , ";
}
echo '] <br/> <br/>';

echo '2)créer un tableau sans la l\'indice 0 ayant pour nom beta <br/>';

echo '$beta = [';
for ($i = 0; $i < count($beta); $i++) {
    echo " " . $beta[$i] . " , ";
}
echo ']<br/><br/>';
echo '3) créer un tableau sans la valeur à l\'indice 2 ayant pour nom delta <br/>';

echo '$delta = [';
for ($i = 0; $i < count($delta); $i++) {
    echo " " . $delta[$i] . " , ";
}
echo ']<br/><br/>';

echo "=================================================";


$letter = ['f', 'g', 'e', 'j', 'k'];

for ($i = 0; $i < count($letter); $i++) {
    $alpha[] = $letter[$i];
}
echo '<br/> 4) ajouter au tableau alpha  ,"f", "g", "e", "j", "k" (BONUS)<br/>';

echo '$alpha = [';
for ($i = 0; $i < count($alpha); $i++) {
    echo " " . $alpha[$i] . " , ";
}
echo ']<br/><br/>';

echo "=================================================";
