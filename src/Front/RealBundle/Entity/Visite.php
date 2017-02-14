<?php

namespace Front\RealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite", indexes={@ORM\Index(name="id_offre", columns={"id_offre"}), @ORM\Index(name="id_gerant", columns={"id_gerant"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Visite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_visite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dde", type="date", nullable=true)
     */
    private $dateDde;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=true)
     */
    private $etat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmation", type="boolean", nullable=true)
     */
    private $confirmation;

    /**
     * @var \Comptes
     *
     * @ORM\ManyToOne(targetEntity="Comptes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_compte")
     * })
     */
    private $idClient;

    /**
     * @var \Comptes
     *
     * @ORM\ManyToOne(targetEntity="Comptes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gerant", referencedColumnName="id_compte")
     * })
     */
    private $idGerant;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offre", referencedColumnName="id_offre")
     * })
     */
    private $idOffre;



    /**
     * Get idVisite
     *
     * @return integer 
     */
    public function getIdVisite()
    {
        return $this->idVisite;
    }

    /**
     * Set dateDde
     *
     * @param \DateTime $dateDde
     * @return Visite
     */
    public function setDateDde($dateDde)
    {
        $this->dateDde = $dateDde;

        return $this;
    }

    /**
     * Get dateDde
     *
     * @return \DateTime 
     */
    public function getDateDde()
    {
        return $this->dateDde;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Visite
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set confirmation
     *
     * @param boolean $confirmation
     * @return Visite
     */
    public function setConfirmation($confirmation)
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Get confirmation
     *
     * @return boolean 
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Set idClient
     *
     * @param \Front\RealBundle\Entity\Comptes $idClient
     * @return Visite
     */
    public function setIdClient(\Front\RealBundle\Entity\Comptes $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \Front\RealBundle\Entity\Comptes 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idGerant
     *
     * @param \Front\RealBundle\Entity\Comptes $idGerant
     * @return Visite
     */
    public function setIdGerant(\Front\RealBundle\Entity\Comptes $idGerant = null)
    {
        $this->idGerant = $idGerant;

        return $this;
    }

    /**
     * Get idGerant
     *
     * @return \Front\RealBundle\Entity\Comptes 
     */
    public function getIdGerant()
    {
        return $this->idGerant;
    }

    /**
     * Set idOffre
     *
     * @param \Front\RealBundle\Entity\Offre $idOffre
     * @return Visite
     */
    public function setIdOffre(\Front\RealBundle\Entity\Offre $idOffre = null)
    {
        $this->idOffre = $idOffre;

        return $this;
    }

    /**
     * Get idOffre
     *
     * @return \Front\RealBundle\Entity\Offre 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }
}
