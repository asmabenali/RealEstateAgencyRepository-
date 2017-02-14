<?php

namespace Front\RealBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Terrain extends Offre {

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
     * @ORM\Column(name="superficie", type="float")
     */
    private $superficie;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    
    

    /**
     * Set superficie
     *
     * @param float $superficie
     * @return Terrain
     */
    public function setSuperficie($superficie) {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return float 
     */
    public function getSuperficie() {
        return $this->superficie;
    }

}
