<?php
// Cette classe contiendra les méthodes de 'Employe.php' et demandera l'execution à EntityRepository

namespace Repository;

use Manager\EntityRepository;
// l'utilisatioon du namespace permet d'extends la classe lors de l'héritage alors qu'il n'y a pas eu d'instanciation

class EmployeRepository extends EntityRepository
{

    public function getAllEmploye()
    {

        return $this->findAll(); // findAll() provient de EntityRepository
    }

    public function getFindEmploye($id)
    {

        return $this->find($id); // find($i) provient de EntityRepository
    }

    public function registerEmploye()
    {

        return $this->register(); // register() provient de EntityRepository
    }

}
