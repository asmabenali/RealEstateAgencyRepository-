<?php

namespace Front\RealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comptes
 *
 * @ORM\Table(name="comptes")
 * @ORM\Entity
 */
class Comptes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=50, nullable=false)
     */
    private $pwd;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=50, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="agence", type="string", length=50, nullable=true)
     */
    private $agence;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Offre", mappedBy="idCompte")
     */
    private $idOffre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idOffre = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idCompte
     *
     * @return integer 
     */
    public function getIdCompte()
    {
        return $this->idCompte;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Comptes
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Comptes
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return Comptes
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Comptes
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Comptes
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set agence
     *
     * @param string $agence
     * @return Comptes
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return string 
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Comptes
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add idOffre
     *
     * @param \Front\RealBundle\Entity\Offre $idOffre
     * @return Comptes
     */
    public function addIdOffre(\Front\RealBundle\Entity\Offre $idOffre)
    {
        $this->idOffre[] = $idOffre;

        return $this;
    }

    /**
     * Remove idOffre
     *
     * @param \Front\RealBundle\Entity\Offre $idOffre
     */
    public function removeIdOffre(\Front\RealBundle\Entity\Offre $idOffre)
    {
        $this->idOffre->removeElement($idOffre);
    }

    /**
     * Get idOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }
}
