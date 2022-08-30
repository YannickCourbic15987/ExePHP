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
