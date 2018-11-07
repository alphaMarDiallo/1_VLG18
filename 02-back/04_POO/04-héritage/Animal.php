<?php

class Animal
{

    protected function deplacement()
    {
        return 'je me deplace <br>';
    }
    public function manger()
    {
        return 'je mange <br>';
    }

}
//---------------------------

class Elephant extends Animal
{

    public function quiSuisJe()
    {
        return 'Je suis un Elephant et  ' . $this->deplacement();
    }
}
//----------------

class Chat extends Animal
{

    public function quiSuisJe()
    {
        return 'Je suis un Chat et  ' . $this->deplacement();
        // On utilise ici la fonction deplacement() issue de ma classe Animal par héritage  et qui est 'protected'. Et cette fonction protected est UNIQUEMENT exécutable dans le parent(la classe Animal) ou dans l'enfant (la classe Elephant). Je n'utilise pas Animal:: seulement dans le cas où je l'aurais redéfinit
    }
    public function manger()
    { // Redefinit la methode , ici, manger()
        return 'Je mange comme un chat <br>';
    }
}
//----------------------------------

$elephant1 = new Elephant;
echo 'elephant : ' . $elephant1->manger() . '<br>';
echo 'elephant : ' . $elephant1->quiSuisJe() . '<br>';
//echo $elephant1->deplacement();// ERREUR, l'hérite bien de la méthode déplacement() mais je ne peux faire appel à elle que DANS UNE CLASSE !

//---------------------------------------

$chat1 = new Chat;
echo 'chat : ' . $chat1->manger() . '<br>';
// L'interpreteur cherche d'abord dans la classe Chat et SEULEMENT SI la méthode n'existait pas il aurait cherché la méthode dans la classe dont j'hérite.