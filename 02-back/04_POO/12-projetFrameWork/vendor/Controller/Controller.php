<?php
//Controller général de l'application. Permet d'appeler des repository et contient nottament la methode render() qui affiche un rendu à l'écran, de manière générale.
namespace Controller;

class Controller
{
    protected $table;
    public function __construct()
    {}
    public function getRepository($table)
    { //on récupère ma table 'employes' (création méthod pour instancier un objet EmployeRepository)
        $class = 'Repository\\' . $table . 'Repository';

        if (isset($this->$table)) {
            $this->table = new $class; // on instancie un objet
        }
        return $this->table;
    }
    //$layout : le design general du site/ $template : la view qui rentre à l'interieur/ $parameters : les paramètres disponibles dans le layout et le template
    public function render($layout, $template, $parameters = array())
    {
        $dirViews = __DIR__ . '/../../src/' . str_replace('\\', '/', get_called_class() . '/../../Views');
        //get_called_class() : retourne le nom de la class depuis laquelle une methode statique a été appelée

        $ex = explode('\\', get_called_class()); //explode() transforme la chaine en tableau

        $dirFile = str_replace('Controller', '', $ex[2]); //On retire le mot 'Controller' grâce à str_replace car dans la view il y a un dossier au nom du module "Employe" et non pas "ControllerEmploye"

        $__template__ = $dirViews . '/' . $dirFile . '/' . $template; //Chemin pour aller au bon endroit au template

        $__layout__ = $dirViews . '/' . $layout; //Chemin pour aller au bon endroit du layout

        extract($parameters, EXTR_SKIP); //estract()permet de créer des variables au nom des indices

        //EXTR_SKIP : permet lors d'une collision, de ne pas réécrire la variable existante

        ob_start(); //Enclenche la temporisation de sortie. c'est à dire que ce qui suit ne se produit pas tout  de suite , nous retenons l'affichage pour être totalement MVC. ab_start() : enclenche la buffering de sortie, permet de mettre tout son site en "tempon" avant de l'afficher grâce à ob_end_flush(on veut le faire en dernier pour respecter le MVC)

        require $__template__; //permet de mettre le contenu dans une variable et avec la ligne du dessus l'envoie des données est retenue.
        $content = ob_get_clean(); //Le template sera représenté par $content. Cette variable est utilisé dans le layout. $content sera le require. Il represente le contenu du fichier indiqué par $template

        ob_start();

        require $__layout__; // ob_start()va retenir l'envoie des données

        return ob_end_flush(); //Envoie le contenu du tampon de sortie (s'il existe) et éteint la temporisation de sortie.
    }

}
