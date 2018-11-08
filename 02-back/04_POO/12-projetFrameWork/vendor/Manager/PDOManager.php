<?php
//Cette classe represente la connexion à la BDD. L'approche Singleton nous permettra d'être certain qu'il n'ait pas plusieur connexions initialisées.

namespace Manager;

class PDOManager
{
    private static $instance = null; //contiendra l'instance de notre classe
    protected $pdo; //contiendra l'instance PDO

    private function __construct()
    {}
    private function __clone()
    {}

    public static function getInstance()
    {
        //si on a pas encore instancié notre classe
        if (is_null(self::$instance)) {
            self::$instance = new self; // revient à faire un new PDOManager
        }
        return self::$instance; // on retourne toujours le même objet(avec le référence[1])
    }

    public function getPDO()
    {
        include __DIR__ . '/../../app/Config.php'; //On ressort pour se diriger au bon endroit

        $config = new \Config(); //Config a été déclaré sans namespace dans l'espace global, d'où l'utilisation du '\' devant Config()

        $connect = $config->getParametersConnect(); //On récupère les paramètres de connexion à travers la config

        try {
            $this->pdo = new \PDO("mysql:dbname=" . $connect['dbname'] . ";host=" . $connect['host'], $connect['user'], $connect['password'], array(PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            //PDO est une classe existante déclaré dans l'espace global d'où la encore l'utilisation du '\'
        } catch (\PDOException $e) { // PDOexception est une classe existante déclaré dans l'espace global d'où la encore l'utilisation du '\'
            echo 'La connexion à échoué : ' . $e->getMessage();
        }
        return $this->pdo;
    }
}
