<?php

namespace FolioSymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schooling
 *
 * @ORM\Table(name="schooling")
 * @ORM\Entity
 */
class Schooling
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idschooling", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idschooling;

    /**
     * @var string
     *
     * @ORM\Column(name="sgtitle", type="string", length=100, nullable=false)
     */
    private $sgtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sgsubtitle", type="string", length=150, nullable=false)
     */
    private $sgsubtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sgdate", type="string", length=50, nullable=false)
     */
    private $sgdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sgdescription", type="integer", nullable=false)
     */
    private $sgdescription;



    /**
     * Get idschooling
     *
     * @return integer
     */
    public function getIdschooling()
    {
        return $this->idschooling;
    }

    /**
     * Set sgtitle
     *
     * @param string $sgtitle
     *
     * @return Schooling
     */
    public function setSgtitle($sgtitle)
    {
        $this->sgtitle = $sgtitle;

        return $this;
    }

    /**
     * Get sgtitle
     *
     * @return string
     */
    public function getSgtitle()
    {
        return $this->sgtitle;
    }

    /**
     * Set sgsubtitle
     *
     * @param string $sgsubtitle
     *
     * @return Schooling
     */
    public function setSgsubtitle($sgsubtitle)
    {
        $this->sgsubtitle = $sgsubtitle;

        return $this;
    }

    /**
     * Get sgsubtitle
     *
     * @return string
     */
    public function getSgsubtitle()
    {
        return $this->sgsubtitle;
    }

    /**
     * Set sgdate
     *
     * @param string $sgdate
     *
     * @return Schooling
     */
    public function setSgdate($sgdate)
    {
        $this->sgdate = $sgdate;

        return $this;
    }

    /**
     * Get sgdate
     *
     * @return string
     */
    public function getSgdate()
    {
        return $this->sgdate;
    }

    /**
     * Set sgdescription
     *
     * @param integer $sgdescription
     *
     * @return Schooling
     */
    public function setSgdescription($sgdescription)
    {
        $this->sgdescription = $sgdescription;

        return $this;
    }

    /**
     * Get sgdescription
     *
     * @return integer
     */
    public function getSgdescription()
    {
        return $this->sgdescription;
    }
}
