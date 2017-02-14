<?php

namespace Front\RealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Villa
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Villa extends Offre
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
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer")
     */
   
  

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPiece", type="integer")
     */
    private $nbrPiece;

    /**
     * @var float
     *
     * @ORM\Column(name="surface_couverte", type="float")
     */
    private $surfaceCouverte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="jardin", type="boolean")
     */
    private $jardin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_salle_db", type="integer")
     */
    private $nbrSalleDb;

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
     * @ORM\Column(name="meuble", type="boolean")
     */
    private $meuble;

    /**
     * @var boolean
     *
     * @ORM\Column(name="climatisation", type="boolean")
     */
    private $climatisation;

    function getId() {
        return $this->id;
    }

    function getNbrPiece() {
        return $this->nbrPiece;
    }

    function getSurfaceCouverte() {
        return $this->surfaceCouverte;
    }

    function getJardin() {
        return $this->jardin;
    }

    function getNbrSalleDb() {
        return $this->nbrSalleDb;
    }

    function getGazDeVille() {
        return $this->gazDeVille;
    }

    function getChauffage() {
        return $this->chauffage;
    }

    function getMeuble() {
        return $this->meuble;
    }

    function getClimatisation() {
        return $this->climatisation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNbrPiece($nbrPiece) {
        $this->nbrPiece = $nbrPiece;
    }

    function setSurfaceCouverte($surfaceCouverte) {
        $this->surfaceCouverte = $surfaceCouverte;
    }

    function setJardin($jardin) {
        $this->jardin = $jardin;
    }

    function setNbrSalleDb($nbrSalleDb) {
        $this->nbrSalleDb = $nbrSalleDb;
    }

    function setGazDeVille($gazDeVille) {
        $this->gazDeVille = $gazDeVille;
    }

    function setChauffage($chauffage) {
        $this->chauffage = $chauffage;
    }

    function setMeuble($meuble) {
        $this->meuble = $meuble;
    }

    function setClimatisation($climatisation) {
        $this->climatisation = $climatisation;
    }


   

}
