<?php
// Pattern : Iterator
// Pattern : permet de proposer de solution pour résoudre des problème récurrant
// Iterator : permet de parcourir des éléments de natures différentes.

$fruits = array(
    ' p' => 'pomme',
    ' f' => 'fraise',
    ' c' => 'cerise',
);

$it1 = new ArrayIterator($fruits);
print '<pre>';
var_dump(get_class_methods($it1));
print '</pre>';

$it1->rewind(); //rewind() permet de se placer au-dessus du tableau

while ($it1->valid()) { //vali() permet de vérifier si il y a des infos à parcourir dans mon tableau
    echo $it1->key() . '=>' . $it1->current() . '<br>'; //key() : affiche l'indice/current() affiche la valeur
    $it1->next(); // next()// permet de passer à l'élément suivant
}
echo '<hr>';
$it2 = new DirectoryIterator('..');
// print '<pre>';
// var_dump(get_class_methods($it2));
// print '</pre>';
$it2->rewind();
while ($it2->valid()) {
    echo $it2->key() . '=>' . $it2->current() . '<br>';
    $it2->next();
}
echo '<hr>';
/*
DirectoryIterator::__construct — Construit un nouvel itérateur de dossier à partir d'un chemin
DirectoryIterator::current — Retourne l'élément courant du DirectoryIterator
DirectoryIterator::getATime — Lit la date et l'heure du dernier accès à un fichier
DirectoryIterator::getBasename — Lit le nom de dossier de l'élément DirectoryIterator
DirectoryIterator::getCTime — Récupère l'heure de création de l'inode d'un fichier
DirectoryIterator::getExtension — Renvoie l'extension du fichier courant
DirectoryIterator::getFilename — Retourne le nom de l'entrée courante du dossier
DirectoryIterator::getGroup — Récupère le groupe d'un fichier
DirectoryIterator::getInode — Récupère l'inode d'un fichier
DirectoryIterator::getMTime — Récupère l'heure de la dernière modification d'un fichier
DirectoryIterator::getOwner — Récupère le propriétaire d'un fichier
DirectoryIterator::getPath — Retourne le chemin du dossier
DirectoryIterator::getPathname — Retourne le chemin et le nom de l'entrée courante du dossier
DirectoryIterator::getPerms — Récupère les permissions d'un fichier
DirectoryIterator::getSize — Récupère la taille d'un fichier
DirectoryIterator::getType — Récupère le type d'un fichier
DirectoryIterator::isDir — Vérifie si un fichier est un dossier
DirectoryIterator::isDot — Retourne TRUE si l'entrée courante est '.' ou '..'
DirectoryIterator::isExecutable — Vérifie si le fichier est exécutable
DirectoryIterator::isFile — Vérifie si l'entrée est un fichier normal
DirectoryIterator::isLink — Vérifie si le fichier est un lien symbolique
DirectoryIterator::isReadable — Vérifie si le fichier est accessible en lecture
DirectoryIterator::isWritable — Vérifie si le fichier peut être modifié
DirectoryIterator::key — Retourne l'entrée courante du dossier
DirectoryIterator::next — Se déplace vers la prochaine entrée
DirectoryIterator::rewind — Revient au début du dossier
DirectoryIterator::seek — Déplace le pointeur dans un itérateur DirectoryIterator
DirectoryIterator::__toString — Lit le nom du fichier
DirectoryIterator::valid — Vérifie si le répertoire contient encore des entrées
 */
class Listing
{
    public function getListing($it)
    {
        $it->rewind();
        while ($it->valid()) {
            echo $it->key() . "=>" . $it->current() . '<br>';
            $it->next();
        }
        echo '<hr>';
    }
}
//---------------------
$listing = new Listing;
$listing->getListing($it1);
$listing->getListing($it1);
