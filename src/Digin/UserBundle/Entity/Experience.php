<?php

namespace Digin\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Digin\UserBundle\Entity\Experience
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Experience
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
     * @var integer $annees_entreprise
     *
     * @ORM\Column(name="annees_entreprise", type="integer")
     */
    private $annees_entreprise;

    /**
     * @var integer $annees_stage
     *
     * @ORM\Column(name="annees_stage", type="integer")
     */
    private $annees_stage;

    /**
     * @var string $secteur
     *
     * @ORM\Column(name="secteur", type="string", length=50)
     */
    private $secteur;

    /**
     * @var boolean $specialisation
     *
     * @ORM\Column(name="specialisation", type="boolean")
     */
    private $specialisation;

    /**
     * @var string $specialisation_details
     *
     * @ORM\Column(name="specialisation_details", type="blob")
     */
    private $specialisation_details;

    /**
     * @var string $taille_entreprise
     *
     * @ORM\Column(name="taille_entreprise", type="string", length=255)
     */
    private $taille_entreprise;

    /**
     * @var string $competences
     *
     * @ORM\Column(name="competences", type="blob")
     */
    private $competences;

    /**
     * @var string $difficultes
     *
     * @ORM\Column(name="difficultes", type="blob")
     */
    private $difficultes;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="blob")
     */
    private $description;

    /**
     * @var string $souhaits
     *
     * @ORM\Column(name="souhaits", type="blob")
     */
    private $souhaits;

    /**
     * @var string $description2
     *
     * @ORM\Column(name="description2", type="string", length=255)
     */
    private $description2;


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
     * Set annees_entreprise
     *
     * @param integer $anneesEntreprise
     * @return Experience
     */
    public function setAnneesEntreprise($anneesEntreprise)
    {
        $this->annees_entreprise = $anneesEntreprise;
    
        return $this;
    }

    /**
     * Get annees_entreprise
     *
     * @return integer 
     */
    public function getAnneesEntreprise()
    {
        return $this->annees_entreprise;
    }

    /**
     * Set annees_stage
     *
     * @param integer $anneesStage
     * @return Experience
     */
    public function setAnneesStage($anneesStage)
    {
        $this->annees_stage = $anneesStage;
    
        return $this;
    }

    /**
     * Get annees_stage
     *
     * @return integer 
     */
    public function getAnneesStage()
    {
        return $this->annees_stage;
    }

    /**
     * Set secteur
     *
     * @param string $secteur
     * @return Experience
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
    
        return $this;
    }

    /**
     * Get secteur
     *
     * @return string 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set specialisation
     *
     * @param boolean $specialisation
     * @return Experience
     */
    public function setSpecialisation($specialisation)
    {
        $this->specialisation = $specialisation;
    
        return $this;
    }

    /**
     * Get specialisation
     *
     * @return boolean 
     */
    public function getSpecialisation()
    {
        return $this->specialisation;
    }

    /**
     * Set specialisation_details
     *
     * @param string $specialisationDetails
     * @return Experience
     */
    public function setSpecialisationDetails($specialisationDetails)
    {
        $this->specialisation_details = $specialisationDetails;
    
        return $this;
    }

    /**
     * Get specialisation_details
     *
     * @return string 
     */
    public function getSpecialisationDetails()
    {
        return $this->specialisation_details;
    }

    /**
     * Set taille_entreprise
     *
     * @param string $tailleEntreprise
     * @return Experience
     */
    public function setTailleEntreprise($tailleEntreprise)
    {
        $this->taille_entreprise = $tailleEntreprise;
    
        return $this;
    }

    /**
     * Get taille_entreprise
     *
     * @return string 
     */
    public function getTailleEntreprise()
    {
        return $this->taille_entreprise;
    }

    /**
     * Set competences
     *
     * @param string $competences
     * @return Experience
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
    
        return $this;
    }

    /**
     * Get competences
     *
     * @return string 
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * Set difficultes
     *
     * @param string $difficultes
     * @return Experience
     */
    public function setDifficultes($difficultes)
    {
        $this->difficultes = $difficultes;
    
        return $this;
    }

    /**
     * Get difficultes
     *
     * @return string 
     */
    public function getDifficultes()
    {
        return $this->difficultes;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Experience
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
     * Set souhaits
     *
     * @param string $souhaits
     * @return Experience
     */
    public function setSouhaits($souhaits)
    {
        $this->souhaits = $souhaits;
    
        return $this;
    }

    /**
     * Get souhaits
     *
     * @return string 
     */
    public function getSouhaits()
    {
        return $this->souhaits;
    }

    /**
     * Set description2
     *
     * @param string $description2
     * @return Experience
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;
    
        return $this;
    }

    /**
     * Get description2
     *
     * @return string 
     */
    public function getDescription2()
    {
        return $this->description2;
    }
}
