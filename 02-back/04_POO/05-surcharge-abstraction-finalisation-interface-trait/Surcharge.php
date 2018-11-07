<?php
// surcharge (override) : Une surcharge permet de prendre en compte le comportement de ma fonction d'origine et d'y ajouter un traitement complémentaire.
class A
{
    public function calcul()
    {
        //traitement
        return 10;
    }
}
//------------------------------------------------------

class B extends A
{
    public function calcul()
    { //Redefinition
        $nb = parent::calcul();
        // On utilisera pas $this-> calcul(), sinon la fonction sera récursive et la méthode s'appelera en boucle.
        // 'parent' fonctionne donc pour appeler une méthode d'une classe parente LORS d'une surcharge. (afin d'éviter quelle ne s'appelle elle même avec $this->calcul())
        //self ::calcul() ne fonctionnerai pas non plus car on essayerait d'appeler quelque chose de la classe courante(alors qu'ici on a besoin de la classe parente)
        if ($nb <= 100) {
            return "$nb est inférieur ou égal à 100 ";
        } else {
            return "$nb est supérieur à 100";
        }
    }
    public function autreCalcul(){
        $nb = parent::calcul(); // Il est possible d'atteindre une méthode de mon parent, même s'il n'y a pas de surcharge
    }
}
//------------------------------------------------------
$objetB = new B;
echo $objetB->calcul();
// affiche 10 est inferieur à 100 - J'ai redéclaré la méthode calcul() dans la classe fille(B), cela s'appel une surcharge, je modifie légèrement le comportement initial contenu dans le parent(A) via sa fille (B)
//------------------------------------------------------------

/* 
Une surcharge : permet de prendre en compte le comportement de la méthode héritée afin d'en bénéficier,  tout en apportant un traitement complémentaire. 

Différence entre self:: et parent:: 
    Lorsque l'on utilise "self::" on demande d'utiliser ce qui est dans la Classe courante ou ce que l'on a hérité sans l'avoir redéfinie dans notre class. Et il faut que cela apprtennent à la classe.
    Quand on utilise : "parent::" on demande d'utiliser les élément de la classe dont on a hérité.

*/