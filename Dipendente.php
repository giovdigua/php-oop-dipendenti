<?php 
require_once 'StrumentiDiLavoro.php';
    class Dipendente {

        private $nome;
        private $cognome;
        private static $matricola = 0;
        private $matrAss;
        
        
        public function __construct($nome,$cognome)
        {
          $this->nome = $nome;
          $this->cognome = $cognome;
          $this->matrAss = self::$matricola += 1;
        }



       
        public function getMatrAss()
        {
                return $this->matrAss;
        }

        

    
        public function getCognome()
        {
                return $this->cognome;
        }

        public function setCognome($cognome)
        {
                $this->cognome = $cognome;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }
  }
?>
