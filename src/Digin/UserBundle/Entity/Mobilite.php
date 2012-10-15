<?php

namespace Digin\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Digin\UserBundle\Entity\Mobilite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mobilite
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user_id;

    /**
     * @var boolean $permis
     *
     * @ORM\Column(name="permis", type="boolean")
     */
    private $permis;

    /**
     * @var string $details_permis
     *
     * @ORM\Column(name="details_permis", type="string", length=255)
     */
    private $details_permis;

    /**
     * @var string $pb_permis
     *
     * @ORM\Column(name="pb_permis", type="string", length=255)
     */
    private $pb_permis;

    /**
     * @var boolean $vehicule
     *
     * @ORM\Column(name="vehicule", type="boolean")
     */
    private $vehicule;

    /**
     * @var boolean $deux_roues
     *
     * @ORM\Column(name="deux_roues", type="boolean")
     */
    private $deux_roues;

    /**
     * @var boolean $voyage
     *
     * @ORM\Column(name="voyage", type="boolean")
     */
    private $voyage;

    /**
     * @var string $destination_voyage
     *
     * @ORM\Column(name="destination_voyage", type="string", length=255)
     */
    private $destination_voyage;

    /**
     * @var string $duree_voyage
     *
     * @ORM\Column(name="duree_voyage", type="string", length=255)
     */
    private $duree_voyage;

    /**
     * @var boolean $metropole
     *
     * @ORM\Column(name="metropole", type="boolean")
     */
    private $metropole;

    /**
     * @var string $but_voyage_metropole
     *
     * @ORM\Column(name="but_voyage_metropole", type="string", length=255)
     */
    private $but_voyage_metropole;

    /**
     * @var string $duree_voyage_metropole
     *
     * @ORM\Column(name="duree_voyage_metropole", type="string", length=255)
     */
    private $duree_voyage_metropole;

    /**
     * @var boolean $desir_mobilite
     *
     * @ORM\Column(name="desir_mobilite", type="boolean")
     */
    private $desir_mobilite;

    /**
     * @var string $motivation_mobilite
     *
     * @ORM\Column(name="motivation_mobilite", type="string", length=255)
     */
    private $motivation_mobilite;


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
     * Set permis
     *
     * @param boolean $permis
     * @return Mobilite
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;
    
        return $this;
    }

    /**
     * Get permis
     *
     * @return boolean 
     */
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set details_permis
     *
     * @param string $detailsPermis
     * @return Mobilite
     */
    public function setDetailsPermis($detailsPermis)
    {
        $this->details_permis = $detailsPermis;
    
        return $this;
    }

    /**
     * Get details_permis
     *
     * @return string 
     */
    public function getDetailsPermis()
    {
        return $this->details_permis;
    }

    /**
     * Set pb_permis
     *
     * @param string $pbPermis
     * @return Mobilite
     */
    public function setPbPermis($pbPermis)
    {
        $this->pb_permis = $pbPermis;
    
        return $this;
    }

    /**
     * Get pb_permis
     *
     * @return string 
     */
    public function getPbPermis()
    {
        return $this->pb_permis;
    }

    /**
     * Set vehicule
     *
     * @param boolean $vehicule
     * @return Mobilite
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    
        return $this;
    }

    /**
     * Get vehicule
     *
     * @return boolean 
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * Set deux_roues
     *
     * @param boolean $deuxRoues
     * @return Mobilite
     */
    public function setDeuxRoues($deuxRoues)
    {
        $this->deux_roues = $deuxRoues;
    
        return $this;
    }

    /**
     * Get deux_roues
     *
     * @return boolean 
     */
    public function getDeuxRoues()
    {
        return $this->deux_roues;
    }

    /**
     * Set voyage
     *
     * @param boolean $voyage
     * @return Mobilite
     */
    public function setVoyage($voyage)
    {
        $this->voyage = $voyage;
    
        return $this;
    }

    /**
     * Get voyage
     *
     * @return boolean 
     */
    public function getVoyage()
    {
        return $this->voyage;
    }

    /**
     * Set destination_voyage
     *
     * @param string $destinationVoyage
     * @return Mobilite
     */
    public function setDestinationVoyage($destinationVoyage)
    {
        $this->destination_voyage = $destinationVoyage;
    
        return $this;
    }

    /**
     * Get destination_voyage
     *
     * @return string 
     */
    public function getDestinationVoyage()
    {
        return $this->destination_voyage;
    }

    /**
     * Set duree_voyage
     *
     * @param string $dureeVoyage
     * @return Mobilite
     */
    public function setDureeVoyage($dureeVoyage)
    {
        $this->duree_voyage = $dureeVoyage;
    
        return $this;
    }

    /**
     * Get duree_voyage
     *
     * @return string 
     */
    public function getDureeVoyage()
    {
        return $this->duree_voyage;
    }

    /**
     * Set metropole
     *
     * @param boolean $metropole
     * @return Mobilite
     */
    public function setMetropole($metropole)
    {
        $this->metropole = $metropole;
    
        return $this;
    }

    /**
     * Get metropole
     *
     * @return boolean 
     */
    public function getMetropole()
    {
        return $this->metropole;
    }

    /**
     * Set but_voyage_metropole
     *
     * @param string $butVoyageMetropole
     * @return Mobilite
     */
    public function setButVoyageMetropole($butVoyageMetropole)
    {
        $this->but_voyage_metropole = $butVoyageMetropole;
    
        return $this;
    }

    /**
     * Get but_voyage_metropole
     *
     * @return string 
     */
    public function getButVoyageMetropole()
    {
        return $this->but_voyage_metropole;
    }

    /**
     * Set duree_voyage_metropole
     *
     * @param string $dureeVoyageMetropole
     * @return Mobilite
     */
    public function setDureeVoyageMetropole($dureeVoyageMetropole)
    {
        $this->duree_voyage_metropole = $dureeVoyageMetropole;
    
        return $this;
    }

    /**
     * Get duree_voyage_metropole
     *
     * @return string 
     */
    public function getDureeVoyageMetropole()
    {
        return $this->duree_voyage_metropole;
    }

    /**
     * Set desir_mobilite
     *
     * @param boolean $desirMobilite
     * @return Mobilite
     */
    public function setDesirMobilite($desirMobilite)
    {
        $this->desir_mobilite = $desirMobilite;
    
        return $this;
    }

    /**
     * Get desir_mobilite
     *
     * @return boolean 
     */
    public function getDesirMobilite()
    {
        return $this->desir_mobilite;
    }

    /**
     * Set motivation_mobilite
     *
     * @param string $motivationMobilite
     * @return Mobilite
     */
    public function setMotivationMobilite($motivationMobilite)
    {
        $this->motivation_mobilite = $motivationMobilite;
    
        return $this;
    }

    /**
     * Get motivation_mobilite
     *
     * @return string 
     */
    public function getMotivationMobilite()
    {
        return $this->motivation_mobilite;
    }
}
