<?php
//Un repository centralise tout ce qui touche à la récupération de vos entités.Concrétement, vous ne devez pas faire La moindre requête SQL ailleurs que dans un repository(c'est la régle)
//EntityRepository ne connait pas "employes" ou autre, il connait que des entités.Cela doit donc rester générique afin que cela soit ré-utilisable.
namespace Manager;

//On utilise des 'use' Lorsque l'on utilise des classes sans faire de 'new' directement dans le fichier courant
use Manager\PDOManager; //On a besoin de PDOManager car en utilisant ce namespace, on a accès a tout ce qui est static de Manager\PDOManager. Le'use' déclenche l'autoload pour que la classe soit chargée et ainsi éviter une ereur.
use PDO;
//Nous utilisons ce namespace car on utilise les constantes et autres propriété, function static de la classe PDO
class EntityRepository
{
    private $db;
    public function __construct()
    {}

    public function getDb()
    {
        if (!$this->db) {
            $this->db = PDOManager::getInstance()->getPdo(); //getInstance() retourne un objet on peut donc mettre une fleche pour appeler une méthode.
        }
        return $this->db;
    }
    private function getTableName()
    {
        return 'employes';
    }
    public function find($id)
    {
        $q = $this->getDB()->query('SELECT * FROM ' . $this->getTableName() . 'WHERE id' . ucfirst($this->getTableName()) . '=' . (int) $id); //id 'Employe' Le premier champ de notre table. Caster en 'int' permet d'éviter des erreurs de requete SQL
        $q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this->getTableName());
        //PDO::FETCH_CLASS : permet d'instancier un objet (dans notre cas : Entity\Employe)
        //setFetchMode() permet de prende les résultats de la requete et d'affecter les propriété de l'objet.(Pour cela, il faut que l'ortographe des noms de colonnes (champs) correspondent aux propriété de l'objet.)
        $r = $q->fetch();
        if (!$r) {
            return false;
        } else {
            return $r;
        }
    }

    public function findAll()
    { // permet d'aller chercher toutes les informations sur un employes
        $q = $this->getDb()->query('SELECT * FROM' . $this->getTableName());
        $q->setFetchMode(PDO::FETCH_CLASS, 'Entity\\' . $this->getTableName());
        $r = $q->fetchAll(); //On récupère un tableau Array composé d'objet
        if (!$r) { //Si la requete ne fonctionne pas
            return false;
        } else { //sinon on retourne les résultat
            return $r;
        }
    }

    public function register()
    {
        $q = $this->getDb()->query('INSERT INTO' . $this->getTableName() . '(' . implode(',', array_keys($_POST)) . ') VALUES (' . "'" . implode("','", $_POST) . "'" . ')');

        return $this->getDb()->lastInsertId(); // derner identifiant généré
    }

}
