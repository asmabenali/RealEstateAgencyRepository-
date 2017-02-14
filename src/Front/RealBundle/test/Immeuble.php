<?php

namespace Front\RealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Immeuble
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Immeuble extends Offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    

    /**
     * @var float
     *
     * @ORM\Column(name="surface_couverte", type="float")
     */
    private $surfaceCouverte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gazDeVille", type="boolean")
     */
    private $gazDeVille;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chauffage", type="boolean")
     */
    private $chauffage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="climatisation", type="boolean")
     */
    private $climatisation;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set surfaceCouverte
     *
     * @param float $surfaceCouverte
     * @return Immeuble
     */
    public function setSurfaceCouverte($surfaceCouverte)
    {
        $this->surfaceCouverte = $surfaceCouverte;

        return $this;
    }

    /**
     * Get surfaceCouverte
     *
     * @return float 
     */
    public function getSurfaceCouverte()
    {
        return $this->surfaceCouverte;
    }

    /**
     * Set gazDeVille
     *
     * @param boolean $gazDeVille
     * @return Immeuble
     */
    public function setGazDeVille($gazDeVille)
    {
        $this->gazDeVille = $gazDeVille;

        return $this;
    }

    /**
     * Get gazDeVille
     *
     * @return boolean 
     */
    public function getGazDeVille()
    {
        return $this->gazDeVille;
    }

    /**
     * Set chauffage
     *
     * @param boolean $chauffage
     * @return Immeuble
     */
    public function setChauffage($chauffage)
    {
        $this->chauffage = $chauffage;

        return $this;
    }

    /**
     * Get chauffage
     *
     * @return boolean 
     */
    public function getChauffage()
    {
        return $this->chauffage;
    }

    /**
     * Set climatisation
     *
     * @param boolean $climatisation
     * @return Immeuble
     */
    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    /**
     * Get climatisation
     *
     * @return boolean 
     */
    public function getClimatisation()
    {
        return $this->climatisation;
    }
}
