<?php

class Homme
{
    private $prenom;
    private $nom;

    public function setPrenom($p)
    { // Par convention, on appel la fonction avec le mot-clé 'set'. On va setter un prenom, c'est à dire lui attribuer/affecter une propriété.
        //$prenom = $p; Cette variable est locale, il ne s'agira donc pas de la variable $prenom de l'objet
        if (is_string($p)) {

            $this->prenom = $p;
        }
    }

    public function getPrenom()
    { // Par convention, on appel la fonction avec le mot-clé 'set'. On va setter un prenom, c'est à dire lui affecter une propriété.
        return $this->prenom;

    }

    public function setNom($n)
    { // Par convention, on appel la fonction avec le mot-clé 'set'. On va setter un nom, c'est à dire lui attribuer/affecter une propriété.
        //$prenom = $n; Cette variable est locale, il ne s'agira donc pas de la variable $nom de l'objet
        if (is_string($n)) {

            $this->nom = $n;
        }

    }

    public function getNom()
    { // Par convention, on appel la fonction avec le mot-clé 'set'. On va setter un nom, c'est à dire lui affecter une propriété.
        return $this->nom;
    }

}

//------------------

$homme1 = new Homme();
$homme1->setPrenom('Alpha'); // Je modifie l'élément(dans l'objet dans lequel on se trouve) car ma méthode  est public.
echo $homme1->getPrenom() . '<br>'; // Accéder à l'élément dans l'objet car la methode est pyblic.

$homme1->setNom('DIALLO'); // Je modifie l'élément(dans l'objet dans lequel on se trouve) car ma méthode  est public.
echo $homme1->getNom() . '<br>'; // Accéder à l'élément dans l'objet car la methode est pyblic.
var_dump($homme1);
//--------------
$homme2 = new Homme();
echo $homme2->getPrenom() . '<br>'; // Cette ligne n'affiche rien car j'ai réinstancié la classe Homme pour créer un objet $homme2
echo $homme2->getNom() . '<br>'; // Cette ligne n'affiche rien car j'ai réinstancié la classe Homme pour créer un objet $homme2
var_dump($homme2);

//-----------------------
/* Pourquoi des getters et des setters :
PHP est un langage objet qui ne type pas ses variables, il faut donc prévoir autant de setter et de getter que de propriété afin de controler l'intégrité des données.
Pour 10 propriétés, il y aura 2 methodes (10 setter & 10 getter)

$this : représente l'objet en cours, ici, à l'intérieur de la classe objet en cours = objet qui exécute la méthode

Les getter : voir / afficher
Les setter : attribuer / affecter
=> Les 2 réunis permettent de controler l'intégrité des données.

Mettre les propriétés en 'private' permet d'éviter qu'elles ne soient modifiées de l'extérieur de la classe sans contrôle.

 */
