<?php

namespace Digin\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Digin\UserBundle\Entity\Preparation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Preparation
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
     * @var boolean $cv
     *
     * @ORM\Column(name="cv", type="boolean")
     */
    private $cv;

    /**
     * @var boolean $lettre_motivation
     *
     * @ORM\Column(name="lettre_motivation", type="boolean")
     */
    private $lettre_motivation;

    /**
     * @var boolean $aisance_entretien
     *
     * @ORM\Column(name="aisance_entretien", type="boolean")
     */
    private $aisance_entretien;

    /**
     * @var string $frequence_consultation
     *
     * @ORM\Column(name="frequence_consultation", type="string", length=255)
     */
    private $frequence_consultation;

    /**
     * @var string $frequence_candidature
     *
     * @ORM\Column(name="frequence_candidature", type="string", length=255)
     */
    private $frequence_candidature;

    /**
     * @var boolean $contacts_pro
     *
     * @ORM\Column(name="contacts_pro", type="boolean")
     */
    private $contacts_pro;

    /**
     * @var boolean $pole_emploi
     *
     * @ORM\Column(name="pole_emploi", type="boolean")
     */
    private $pole_emploi;

    /**
     * @var string $frequence_pole_emploi
     *
     * @ORM\Column(name="frequence_pole_emploi", type="string", length=255)
     */
    private $frequence_pole_emploi;

    /**
     * @var boolean $entretien
     *
     * @ORM\Column(name="entretien", type="boolean")
     */
    private $entretien;

    /**
     * @var string $frequence_entretien
     *
     * @ORM\Column(name="frequence_entretien", type="string", length=255)
     */
    private $frequence_entretien;

    /**
     * @var boolean $besoin_aide
     *
     * @ORM\Column(name="besoin_aide", type="boolean")
     */
    private $besoin_aide;


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
     * Set cv
     *
     * @param boolean $cv
     * @return Preparation
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    
        return $this;
    }

    /**
     * Get cv
     *
     * @return boolean 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set lettre_motivation
     *
     * @param boolean $lettreMotivation
     * @return Preparation
     */
    public function setLettreMotivation($lettreMotivation)
    {
        $this->lettre_motivation = $lettreMotivation;
    
        return $this;
    }

    /**
     * Get lettre_motivation
     *
     * @return boolean 
     */
    public function getLettreMotivation()
    {
        return $this->lettre_motivation;
    }

    /**
     * Set aisance_entretien
     *
     * @param boolean $aisanceEntretien
     * @return Preparation
     */
    public function setAisanceEntretien($aisanceEntretien)
    {
        $this->aisance_entretien = $aisanceEntretien;
    
        return $this;
    }

    /**
     * Get aisance_entretien
     *
     * @return boolean 
     */
    public function getAisanceEntretien()
    {
        return $this->aisance_entretien;
    }

    /**
     * Set frequence_consultation
     *
     * @param string $frequenceConsultation
     * @return Preparation
     */
    public function setFrequenceConsultation($frequenceConsultation)
    {
        $this->frequence_consultation = $frequenceConsultation;
    
        return $this;
    }

    /**
     * Get frequence_consultation
     *
     * @return string 
     */
    public function getFrequenceConsultation()
    {
        return $this->frequence_consultation;
    }

    /**
     * Set frequence_candidature
     *
     * @param string $frequenceCandidature
     * @return Preparation
     */
    public function setFrequenceCandidature($frequenceCandidature)
    {
        $this->frequence_candidature = $frequenceCandidature;
    
        return $this;
    }

    /**
     * Get frequence_candidature
     *
     * @return string 
     */
    public function getFrequenceCandidature()
    {
        return $this->frequence_candidature;
    }

    /**
     * Set contacts_pro
     *
     * @param boolean $contactsPro
     * @return Preparation
     */
    public function setContactsPro($contactsPro)
    {
        $this->contacts_pro = $contactsPro;
    
        return $this;
    }

    /**
     * Get contacts_pro
     *
     * @return boolean 
     */
    public function getContactsPro()
    {
        return $this->contacts_pro;
    }

    /**
     * Set pole_emploi
     *
     * @param boolean $poleEmploi
     * @return Preparation
     */
    public function setPoleEmploi($poleEmploi)
    {
        $this->pole_emploi = $poleEmploi;
    
        return $this;
    }

    /**
     * Get pole_emploi
     *
     * @return boolean 
     */
    public function getPoleEmploi()
    {
        return $this->pole_emploi;
    }

    /**
     * Set frequence_pole_emploi
     *
     * @param string $frequencePoleEmploi
     * @return Preparation
     */
    public function setFrequencePoleEmploi($frequencePoleEmploi)
    {
        $this->frequence_pole_emploi = $frequencePoleEmploi;
    
        return $this;
    }

    /**
     * Get frequence_pole_emploi
     *
     * @return string 
     */
    public function getFrequencePoleEmploi()
    {
        return $this->frequence_pole_emploi;
    }

    /**
     * Set entretien
     *
     * @param boolean $entretien
     * @return Preparation
     */
    public function setEntretien($entretien)
    {
        $this->entretien = $entretien;
    
        return $this;
    }

    /**
     * Get entretien
     *
     * @return boolean 
     */
    public function getEntretien()
    {
        return $this->entretien;
    }

    /**
     * Set frequence_entretien
     *
     * @param string $frequenceEntretien
     * @return Preparation
     */
    public function setFrequenceEntretien($frequenceEntretien)
    {
        $this->frequence_entretien = $frequenceEntretien;
    
        return $this;
    }

    /**
     * Get frequence_entretien
     *
     * @return string 
     */
    public function getFrequenceEntretien()
    {
        return $this->frequence_entretien;
    }

    /**
     * Set besoin_aide
     *
     * @param boolean $besoinAide
     * @return Preparation
     */
    public function setBesoinAide($besoinAide)
    {
        $this->besoin_aide = $besoinAide;
    
        return $this;
    }

    /**
     * Get besoin_aide
     *
     * @return boolean 
     */
    public function getBesoinAide()
    {
        return $this->besoin_aide;
    }
}
