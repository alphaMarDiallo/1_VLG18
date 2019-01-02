<?php

namespace FolioSymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity
 */
class Languages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlanguage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="lglanguage", type="string", length=250, nullable=false)
     */
    private $lglanguage;

    /**
     * @var integer
     *
     * @ORM\Column(name="lglevel", type="integer", nullable=false)
     */
    private $lglevel;



    /**
     * Get idlanguage
     *
     * @return integer
     */
    public function getIdlanguage()
    {
        return $this->idlanguage;
    }

    /**
     * Set lglanguage
     *
     * @param string $lglanguage
     *
     * @return Languages
     */
    public function setLglanguage($lglanguage)
    {
        $this->lglanguage = $lglanguage;

        return $this;
    }

    /**
     * Get lglanguage
     *
     * @return string
     */
    public function getLglanguage()
    {
        return $this->lglanguage;
    }

    /**
     * Set lglevel
     *
     * @param integer $lglevel
     *
     * @return Languages
     */
    public function setLglevel($lglevel)
    {
        $this->lglevel = $lglevel;

        return $this;
    }

    /**
     * Get lglevel
     *
     * @return integer
     */
    public function getLglevel()
    {
        return $this->lglevel;
    }
}
