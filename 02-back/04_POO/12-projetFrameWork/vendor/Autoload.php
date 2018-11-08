<?php
class Autoload
{
    public static $nb = 0; // permet de compter le nombre de fois que l'on passe ici
    public static function className($className)
    {
        echo '<pre>' . self::$nb . 'Autoload : ' . $className;
        $tab = explode('\\', $className); // explode permet de prendre la chaîne et de la transformer en array. Ici, on chercher le caractère '\' MAIS si on let qu'un seul backslash, c'est comme si on voulais échapper la quote(') d'ou l'interet ici de mettre 2 backslahs (\\)
        if ($tab[0] == 'BackOffice') { //L'implode ,ous permet de svaoir si l'on doit reculer d'un dossier pour aller chercher un module spécifique (bundle)
            $path = __DIR__ . '/../src/' . implode('/', $tab) . '.php'; //On remet chaque element du tableau
            # code...
        } else {
            $path = __DIR__ . '/' . implode('/', $tab) . '.php';
            # code...
        }
        echo "\n=> $path </pre><hr>"; //permet de voir les classes instancié grâce à l'autoload.
        require $path;
        self::$nb++;
    }
}
spl_autoload_register(array('Autoload', 'className')); //Lorsque L'on utilise l'autoload sur une classe, il faut paser un array et la methode doit etre static
