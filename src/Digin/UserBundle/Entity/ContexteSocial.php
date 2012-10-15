<?php

namespace Digin\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Digin\UserBundle\Entity\ContexteSocial
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ContexteSocial
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
     * @var string $statut_matrimonial
     *
     * @ORM\Column(name="statut_matrimonial", type="string", length=50)
     */
    private $statut_matrimonial;

    /**
     * @var boolean $enfant
     *
     * @ORM\Column(name="enfant", type="boolean")
     */
    private $enfant;

    /**
     * @var integer $nombre_enfant
     *
     * @ORM\Column(name="nombre_enfant", type="integer")
     */
    private $nombre_enfant;

    /**
     * @var string $age_enfant
     *
     * @ORM\Column(name="age_enfant", type="string", length=255)
     */
    private $age_enfant;

    /**
     * @var string $hebergement
     *
     * @ORM\Column(name="hebergement", type="string", length=255)
     */
    private $hebergement;

    /**
     * @var string $statut_professionnel
     *
     * @ORM\Column(name="statut_professionnel", type="string", length=255)
     */
    private $statut_professionnel;

    /**
     * @var \DateTime $date_debut_professionnel
     *
     * @ORM\Column(name="date_debut_professionnel", type="date")
     */
    private $date_debut_professionnel;

    /**
     * @var boolean $pb_sante
     *
     * @ORM\Column(name="pb_sante", type="boolean")
     */
    private $pb_sante;

    /**
     * @var string $etat_physique
     *
     * @ORM\Column(name="etat_physique", type="string", length=255)
     */
    private $etat_physique;

    /**
     * @var boolean $etat_psychologique
     *
     * @ORM\Column(name="etat_psychologique", type="boolean")
     */
    private $etat_psychologique;

    /**
     * @var string $suivi_psy
     *
     * @ORM\Column(name="suivi_psy", type="string", length=255)
     */
    private $suivi_psy;

    /**
     * @var boolean $etat_financier
     *
     * @ORM\Column(name="etat_financier", type="boolean")
     */
    private $etat_financier;

    /**
     * @var string $endettement
     *
     * @ORM\Column(name="endettement", type="string", length=255)
     */
    private $endettement;

    /**
     * @var string $avancement_demarche
     *
     * @ORM\Column(name="avancement_demarche", type="string", length=255)
     */
    private $avancement_demarche;

    /**
     * @var string $commentaire
     *
     * @ORM\Column(name="commentaire", type="blob")
     */
    private $commentaire;


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
     * Set statut_matrimonial
     *
     * @param string $statutMatrimonial
     * @return ContexteSocial
     */
    public function setStatutMatrimonial($statutMatrimonial)
    {
        $this->statut_matrimonial = $statutMatrimonial;
    
        return $this;
    }

    /**
     * Get statut_matrimonial
     *
     * @return string 
     */
    public function getStatutMatrimonial()
    {
        return $this->statut_matrimonial;
    }

    /**
     * Set enfant
     *
     * @param boolean $enfant
     * @return ContexteSocial
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;
    
        return $this;
    }

    /**
     * Get enfant
     *
     * @return boolean 
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set nombre_enfant
     *
     * @param integer $nombreEnfant
     * @return ContexteSocial
     */
    public function setNombreEnfant($nombreEnfant)
    {
        $this->nombre_enfant = $nombreEnfant;
    
        return $this;
    }

    /**
     * Get nombre_enfant
     *
     * @return integer 
     */
    public function getNombreEnfant()
    {
        return $this->nombre_enfant;
    }

    /**
     * Set age_enfant
     *
     * @param string $ageEnfant
     * @return ContexteSocial
     */
    public function setAgeEnfant($ageEnfant)
    {
        $this->age_enfant = $ageEnfant;
    
        return $this;
    }

    /**
     * Get age_enfant
     *
     * @return string 
     */
    public function getAgeEnfant()
    {
        return $this->age_enfant;
    }

    /**
     * Set hebergement
     *
     * @param string $hebergement
     * @return ContexteSocial
     */
    public function setHebergement($hebergement)
    {
        $this->hebergement = $hebergement;
    
        return $this;
    }

    /**
     * Get hebergement
     *
     * @return string 
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * Set statut_professionnel
     *
     * @param string $statutProfessionnel
     * @return ContexteSocial
     */
    public function setStatutProfessionnel($statutProfessionnel)
    {
        $this->statut_professionnel = $statutProfessionnel;
    
        return $this;
    }

    /**
     * Get statut_professionnel
     *
     * @return string 
     */
    public function getStatutProfessionnel()
    {
        return $this->statut_professionnel;
    }

    /**
     * Set date_debut_professionnel
     *
     * @param \DateTime $dateDebutProfessionnel
     * @return ContexteSocial
     */
    public function setDateDebutProfessionnel($dateDebutProfessionnel)
    {
        $this->date_debut_professionnel = $dateDebutProfessionnel;
    
        return $this;
    }

    /**
     * Get date_debut_professionnel
     *
     * @return \DateTime 
     */
    public function getDateDebutProfessionnel()
    {
        return $this->date_debut_professionnel;
    }

    /**
     * Set pb_sante
     *
     * @param boolean $pbSante
     * @return ContexteSocial
     */
    public function setPbSante($pbSante)
    {
        $this->pb_sante = $pbSante;
    
        return $this;
    }

    /**
     * Get pb_sante
     *
     * @return boolean 
     */
    public function getPbSante()
    {
        return $this->pb_sante;
    }

    /**
     * Set etat_physique
     *
     * @param string $etatPhysique
     * @return ContexteSocial
     */
    public function setEtatPhysique($etatPhysique)
    {
        $this->etat_physique = $etatPhysique;
    
        return $this;
    }

    /**
     * Get etat_physique
     *
     * @return string 
     */
    public function getEtatPhysique()
    {
        return $this->etat_physique;
    }

    /**
     * Set etat_psychologique
     *
     * @param boolean $etatPsychologique
     * @return ContexteSocial
     */
    public function setEtatPsychologique($etatPsychologique)
    {
        $this->etat_psychologique = $etatPsychologique;
    
        return $this;
    }

    /**
     * Get etat_psychologique
     *
     * @return boolean 
     */
    public function getEtatPsychologique()
    {
        return $this->etat_psychologique;
    }

    /**
     * Set suivi_psy
     *
     * @param string $suiviPsy
     * @return ContexteSocial
     */
    public function setSuiviPsy($suiviPsy)
    {
        $this->suivi_psy = $suiviPsy;
    
        return $this;
    }

    /**
     * Get suivi_psy
     *
     * @return string 
     */
    public function getSuiviPsy()
    {
        return $this->suivi_psy;
    }

    /**
     * Set etat_financier
     *
     * @param boolean $etatFinancier
     * @return ContexteSocial
     */
    public function setEtatFinancier($etatFinancier)
    {
        $this->etat_financier = $etatFinancier;
    
        return $this;
    }

    /**
     * Get etat_financier
     *
     * @return boolean 
     */
    public function getEtatFinancier()
    {
        return $this->etat_financier;
    }

    /**
     * Set endettement
     *
     * @param string $endettement
     * @return ContexteSocial
     */
    public function setEndettement($endettement)
    {
        $this->endettement = $endettement;
    
        return $this;
    }

    /**
     * Get endettement
     *
     * @return string 
     */
    public function getEndettement()
    {
        return $this->endettement;
    }

    /**
     * Set avancement_demarche
     *
     * @param string $avancementDemarche
     * @return ContexteSocial
     */
    public function setAvancementDemarche($avancementDemarche)
    {
        $this->avancement_demarche = $avancementDemarche;
    
        return $this;
    }

    /**
     * Get avancement_demarche
     *
     * @return string 
     */
    public function getAvancementDemarche()
    {
        return $this->avancement_demarche;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return ContexteSocial
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
