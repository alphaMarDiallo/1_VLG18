<?php

class A{

    public function direBonjour(){
        return 'Bonjour';
    }
}
//---------------

class B { // class B n'hérite PAS de la classe A

    public $maVariable;

    public function __construct(){
         $this->maVariable = new A; // Je crée un objet A que je place dans ma propriété '$maVariable' de mon objet
    }

    public function maMethode(){
        return $this->maVariable->direBonjour();
        // Dans mon objet B ($this), je peux appeler les méthodes sur mon objet A ($this->$maVariable)
        // objet B->objet A -> direBonjour()
    }
}

//--------------
$b = new B;
echo $b->maVariable->direBonjour();
echo'<br>';
echo $b->maMethode();