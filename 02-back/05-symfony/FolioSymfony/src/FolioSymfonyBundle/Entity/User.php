<?php

namespace FolioSymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="ufirstname", type="string", length=100, nullable=false)
     */
    private $ufirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="ulastname", type="string", length=100, nullable=false)
     */
    private $ulastname;

    /**
     * @var string
     *
     * @ORM\Column(name="uemail", type="string", length=150, nullable=false)
     */
    private $uemail;

    /**
     * @var integer
     *
     * @ORM\Column(name="uphone", type="integer", nullable=false)
     */
    private $uphone;

    /**
     * @var string
     *
     * @ORM\Column(name="upassword", type="string", length=20, nullable=false)
     */
    private $upassword;

    /**
     * @var string
     *
     * @ORM\Column(name="upseudo", type="string", length=30, nullable=false)
     */
    private $upseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="uavatar", type="string", length=20, nullable=false)
     */
    private $uavatar;

    /**
     * @var string
     *
     * @ORM\Column(name="ucivil", type="string", length=2, nullable=false)
     */
    private $ucivil;

    /**
     * @var string
     *
     * @ORM\Column(name="uaddress", type="string", length=50, nullable=false)
     */
    private $uaddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="uzip", type="integer", nullable=false)
     */
    private $uzip;

    /**
     * @var string
     *
     * @ORM\Column(name="utown", type="string", length=200, nullable=false)
     */
    private $utown;

    /**
     * @var string
     *
     * @ORM\Column(name="ucountry", type="string", length=100, nullable=false)
     */
    private $ucountry;

    /**
     * @var string
     *
     * @ORM\Column(name="ulink", type="string", length=150, nullable=false)
     */
    private $ulink;



    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set ufirstname
     *
     * @param string $ufirstname
     *
     * @return User
     */
    public function setUfirstname($ufirstname)
    {
        $this->ufirstname = $ufirstname;

        return $this;
    }

    /**
     * Get ufirstname
     *
     * @return string
     */
    public function getUfirstname()
    {
        return $this->ufirstname;
    }

    /**
     * Set ulastname
     *
     * @param string $ulastname
     *
     * @return User
     */
    public function setUlastname($ulastname)
    {
        $this->ulastname = $ulastname;

        return $this;
    }

    /**
     * Get ulastname
     *
     * @return string
     */
    public function getUlastname()
    {
        return $this->ulastname;
    }

    /**
     * Set uemail
     *
     * @param string $uemail
     *
     * @return User
     */
    public function setUemail($uemail)
    {
        $this->uemail = $uemail;

        return $this;
    }

    /**
     * Get uemail
     *
     * @return string
     */
    public function getUemail()
    {
        return $this->uemail;
    }

    /**
     * Set uphone
     *
     * @param integer $uphone
     *
     * @return User
     */
    public function setUphone($uphone)
    {
        $this->uphone = $uphone;

        return $this;
    }

    /**
     * Get uphone
     *
     * @return integer
     */
    public function getUphone()
    {
        return $this->uphone;
    }

    /**
     * Set upassword
     *
     * @param string $upassword
     *
     * @return User
     */
    public function setUpassword($upassword)
    {
        $this->upassword = $upassword;

        return $this;
    }

    /**
     * Get upassword
     *
     * @return string
     */
    public function getUpassword()
    {
        return $this->upassword;
    }

    /**
     * Set upseudo
     *
     * @param string $upseudo
     *
     * @return User
     */
    public function setUpseudo($upseudo)
    {
        $this->upseudo = $upseudo;

        return $this;
    }

    /**
     * Get upseudo
     *
     * @return string
     */
    public function getUpseudo()
    {
        return $this->upseudo;
    }

    /**
     * Set uavatar
     *
     * @param string $uavatar
     *
     * @return User
     */
    public function setUavatar($uavatar)
    {
        $this->uavatar = $uavatar;

        return $this;
    }

    /**
     * Get uavatar
     *
     * @return string
     */
    public function getUavatar()
    {
        return $this->uavatar;
    }

    /**
     * Set ucivil
     *
     * @param string $ucivil
     *
     * @return User
     */
    public function setUcivil($ucivil)
    {
        $this->ucivil = $ucivil;

        return $this;
    }

    /**
     * Get ucivil
     *
     * @return string
     */
    public function getUcivil()
    {
        return $this->ucivil;
    }

    /**
     * Set uaddress
     *
     * @param string $uaddress
     *
     * @return User
     */
    public function setUaddress($uaddress)
    {
        $this->uaddress = $uaddress;

        return $this;
    }

    /**
     * Get uaddress
     *
     * @return string
     */
    public function getUaddress()
    {
        return $this->uaddress;
    }

    /**
     * Set uzip
     *
     * @param integer $uzip
     *
     * @return User
     */
    public function setUzip($uzip)
    {
        $this->uzip = $uzip;

        return $this;
    }

    /**
     * Get uzip
     *
     * @return integer
     */
    public function getUzip()
    {
        return $this->uzip;
    }

    /**
     * Set utown
     *
     * @param string $utown
     *
     * @return User
     */
    public function setUtown($utown)
    {
        $this->utown = $utown;

        return $this;
    }

    /**
     * Get utown
     *
     * @return string
     */
    public function getUtown()
    {
        return $this->utown;
    }

    /**
     * Set ucountry
     *
     * @param string $ucountry
     *
     * @return User
     */
    public function setUcountry($ucountry)
    {
        $this->ucountry = $ucountry;

        return $this;
    }

    /**
     * Get ucountry
     *
     * @return string
     */
    public function getUcountry()
    {
        return $this->ucountry;
    }

    /**
     * Set ulink
     *
     * @param string $ulink
     *
     * @return User
     */
    public function setUlink($ulink)
    {
        $this->ulink = $ulink;

        return $this;
    }

    /**
     * Get ulink
     *
     * @return string
     */
    public function getUlink()
    {
        return $this->ulink;
    }
}
