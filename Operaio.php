<?php
require_once 'Dipendente.php';


class Operaio extends Dipendente {

   // use StrumentiDiLavoro;

    private $reparto;

    public function __construct($nome,$cognome,$reparto){
        parent::__construct($nome,$cognome);
        $this->reparto = $reparto;
    }

    public function getReparto(){
        return $this->reparto;
    }

    public function usoStrumenti()
    {
        if ($this->getReparto() !== 'Assemblaggio') {
           throw new Exception('Non puoi assemblare non sei di questo reparto');
        }
        echo 'Buon lavoro!';
    }
   

}
?>