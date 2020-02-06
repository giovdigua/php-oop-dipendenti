<?php
require_once 'Dipendente.php';
require_once 'Operaio.php';

$dip1 = new Dipendente('Mario','Rossi');
$dip2 = new Dipendente('Luigi','Bianchi');
$dip3 = new Dipendente('Piero','Verdi');
$op1 = new Operaio('Giuseppe','Neri','Assemblaggio');
$op2 = new Operaio('Francesco','Gialli','Manutentore');

echo '<pre>';
var_dump($dip1);
var_dump($dip2);
var_dump($dip3);
echo '</pre>';

echo $dip2->getMatrAss();
echo $op2->getMatrAss();

try {
    $op2->usoStrumenti();

} catch (\Exception $e) {
    echo $e->getMessage();
}

try {
    $op1->usoStrumenti();

} catch (\Exception $e) {
    echo $e->getMessage();
}