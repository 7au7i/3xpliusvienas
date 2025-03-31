<?php
// Konstanta su informacija apie programa
define("AUTORIUS", "Programos autorius: Paulius '7au7i' Jurgaitis");
define("VERSIJA", "Versija: 1.0");

// Itrauk failus su klasėmis
include 'Problema.php';
include 'ProblemosHistograma.php';

// Programos vykdymas
$pradzia = 10;
$pabaiga = 100;
$problemosHist = new ProblemosHistograma();
$problemosHist->generuotiHistograma($pradzia, $pabaiga);
$problemosHist->rodytiHistograma();

// Isvedame informacija apie programa
echo AUTORIUS . "\n";
echo VERSIJA . "\n";
?>
