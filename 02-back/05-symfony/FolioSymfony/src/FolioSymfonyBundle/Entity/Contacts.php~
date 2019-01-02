<?php

namespace FolioSymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity
 */
class Contacts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="ctfirstname", type="string", length=250, nullable=false)
     */
    private $ctfirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="ctlastname", type="string", length=250, nullable=false)
     */
    private $ctlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="ctemail", type="string", length=200, nullable=false)
     */
    private $ctemail;

    /**
     * @var string
     *
     * @ORM\Column(name="ctmessage", type="text", length=65535, nullable=false)
     */
    private $ctmessage;



    /**
     * Get idcontact
     *
     * @return integer
     */
    public function getIdcontact()
    {
        return $this->idcontact;
    }

    /**
     * Set ctfirstname
     *
     * @param string $ctfirstname
     *
     * @return Contacts
     */
    public function setCtfirstname($ctfirstname)
    {
        $this->ctfirstname = $ctfirstname;

        return $this;
    }

    /**
     * Get ctfirstname
     *
     * @return string
     */
    public function getCtfirstname()
    {
        return $this->ctfirstname;
    }

    /**
     * Set ctlastname
     *
     * @param string $ctlastname
     *
     * @return Contacts
     */
    public function setCtlastname($ctlastname)
    {
        $this->ctlastname = $ctlastname;

        return $this;
    }

    /**
     * Get ctlastname
     *
     * @return string
     */
    public function getCtlastname()
    {
        return $this->ctlastname;
    }

    /**
     * Set ctemail
     *
     * @param string $ctemail
     *
     * @return Contacts
     */
    public function setCtemail($ctemail)
    {
        $this->ctemail = $ctemail;

        return $this;
    }

    /**
     * Get ctemail
     *
     * @return string
     */
    public function getCtemail()
    {
        return $this->ctemail;
    }

    /**
     * Set ctmessage
     *
     * @param string $ctmessage
     *
     * @return Contacts
     */
    public function setCtmessage($ctmessage)
    {
        $this->ctmessage = $ctmessage;

        return $this;
    }

    /**
     * Get ctmessage
     *
     * @return string
     */
    public function getCtmessage()
    {
        return $this->ctmessage;
    }
}
