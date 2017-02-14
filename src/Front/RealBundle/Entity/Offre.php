<?php

namespace Front\RealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="offre_ibfk_1", columns={"id_user"}), @ORM\Index(name="fk_ville", columns={"ville"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=20, nullable=false)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="typeImmob", type="string", length=20, nullable=false)
     */
    private $typeimmob;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="superficie", type="float", precision=10, scale=0, nullable=true)
     */
    private $superficie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrPiece", type="integer", nullable=true)
     */
    private $nbrpiece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="date", nullable=true)
     */
    private $datepublication;

    /**
     * @var string
     *
     * @ORM\Column(name="etage", type="string", length=50, nullable=true)
     */
    private $etage;

    /**
     * @var float
     *
     * @ORM\Column(name="surface_couverte", type="float", precision=10, scale=0, nullable=true)
     */
    private $surfaceCouverte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_salle_db", type="integer", nullable=true)
     */
    private $nbrSalleDb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gazDeVille", type="boolean", nullable=true)
     */
    private $gazdeville;

    /**
     * @var boolean
     *
     * @ORM\Column(name="jardin", type="boolean", nullable=true)
     */
    private $jardin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chauffage", type="boolean", nullable=true)
     */
    private $chauffage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="meuble", type="boolean", nullable=true)
     */
    private $meuble;

    /**
     * @var boolean
     *
     * @ORM\Column(name="climatisation", type="boolean", nullable=true)
     */
    private $climatisation;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var \Comptes
     *
     * @ORM\ManyToOne(targetEntity="Comptes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_compte")
     * })
     */
    private $idUser;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville", referencedColumnName="ville")
     * })
     */
    private $ville;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comptes", inversedBy="idOffre")
     * @ORM\JoinTable(name="note",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_offre", referencedColumnName="id_offre")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_compte", referencedColumnName="id_compte")
     *   }
     * )
     */
    private $idCompte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCompte = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idOffre
     *
     * @return integer 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Set nature
     *
     * @param string $nature
     * @return Offre
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set typeimmob
     *
     * @param string $typeimmob
     * @return Offre
     */
    public function setTypeimmob($typeimmob)
    {
        $this->typeimmob = $typeimmob;

        return $this;
    }

    /**
     * Get typeimmob
     *
     * @return string 
     */
    public function getTypeimmob()
    {
        return $this->typeimmob;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Offre
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set superficie
     *
     * @param float $superficie
     * @return Offre
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return float 
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set nbrpiece
     *
     * @param integer $nbrpiece
     * @return Offre
     */
    public function setNbrpiece($nbrpiece)
    {
        $this->nbrpiece = $nbrpiece;

        return $this;
    }

    /**
     * Get nbrpiece
     *
     * @return integer 
     */
    public function getNbrpiece()
    {
        return $this->nbrpiece;
    }

    /**
     * Set datepublication
     *
     * @param \DateTime $datepublication
     * @return Offre
     */
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    /**
     * Get datepublication
     *
     * @return \DateTime 
     */
    public function getDatepublication()
    {
        return $this->datepublication;
    }

    /**
     * Set etage
     *
     * @param string $etage
     * @return Offre
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return string 
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set surfaceCouverte
     *
     * @param float $surfaceCouverte
     * @return Offre
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
     * Set nbrSalleDb
     *
     * @param integer $nbrSalleDb
     * @return Offre
     */
    public function setNbrSalleDb($nbrSalleDb)
    {
        $this->nbrSalleDb = $nbrSalleDb;

        return $this;
    }

    /**
     * Get nbrSalleDb
     *
     * @return integer 
     */
    public function getNbrSalleDb()
    {
        return $this->nbrSalleDb;
    }

    /**
     * Set gazdeville
     *
     * @param boolean $gazdeville
     * @return Offre
     */
    public function setGazdeville($gazdeville)
    {
        $this->gazdeville = $gazdeville;

        return $this;
    }

    /**
     * Get gazdeville
     *
     * @return boolean 
     */
    public function getGazdeville()
    {
        return $this->gazdeville;
    }

    /**
     * Set jardin
     *
     * @param boolean $jardin
     * @return Offre
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;

        return $this;
    }

    /**
     * Get jardin
     *
     * @return boolean 
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set chauffage
     *
     * @param boolean $chauffage
     * @return Offre
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
     * Set meuble
     *
     * @param boolean $meuble
     * @return Offre
     */
    public function setMeuble($meuble)
    {
        $this->meuble = $meuble;

        return $this;
    }

    /**
     * Get meuble
     *
     * @return boolean 
     */
    public function getMeuble()
    {
        return $this->meuble;
    }

    /**
     * Set climatisation
     *
     * @param boolean $climatisation
     * @return Offre
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

    /**
     * Set note
     *
     * @param float $note
     * @return Offre
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Offre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Offre
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set idUser
     *
     * @param \Front\RealBundle\Entity\Comptes $idUser
     * @return Offre
     */
    public function setIdUser(\Front\RealBundle\Entity\Comptes $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Front\RealBundle\Entity\Comptes 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set ville
     *
     * @param \Front\RealBundle\Entity\Ville $ville
     * @return Offre
     */
    public function setVille(\Front\RealBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Front\RealBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Add idCompte
     *
     * @param \Front\RealBundle\Entity\Comptes $idCompte
     * @return Offre
     */
    public function addIdCompte(\Front\RealBundle\Entity\Comptes $idCompte)
    {
        $this->idCompte[] = $idCompte;

        return $this;
    }

    /**
     * Remove idCompte
     *
     * @param \Front\RealBundle\Entity\Comptes $idCompte
     */
    public function removeIdCompte(\Front\RealBundle\Entity\Comptes $idCompte)
    {
        $this->idCompte->removeElement($idCompte);
    }

    /**
     * Get idCompte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCompte()
    {
        return $this->idCompte;
    }
    
}
