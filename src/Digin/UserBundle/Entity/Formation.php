<?php

namespace Digin\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Digin\UserBundle\Entity\Formation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Formation
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
     * @var integer $user_id
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="formation")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     **/
    private $user_id;

    /**
     * @var boolean $desir_formation
     *
     * @ORM\Column(name="desir_formation", type="boolean")
     */
    private $desir_formation;

    /**
     * @var string $intitule_formation
     *
     * @ORM\Column(name="intitule_formation", type="string", length=255)
     */
    private $intitule_formation;

    /**
     * @var boolean $desir_reorientation
     *
     * @ORM\Column(name="desir_reorientation", type="boolean")
     */
    private $desir_reorientation;

    /**
     * @var string $secteur_reorientation
     *
     * @ORM\Column(name="secteur_reorientation", type="string", length=255)
     */
    private $secteur_reorientation;

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
     * Set desir_formation
     *
     * @param boolean $desirFormation
     * @return Formation
     */
    public function setDesirFormation($desirFormation)
    {
        $this->desir_formation = $desirFormation;
    
        return $this;
    }

    /**
     * Get desir_formation
     *
     * @return boolean 
     */
    public function getDesirFormation()
    {
        return $this->desir_formation;
    }

    /**
     * Set intitule_formation
     *
     * @param string $intituleFormation
     * @return Formation
     */
    public function setIntituleFormation($intituleFormation)
    {
        $this->intitule_formation = $intituleFormation;
    
        return $this;
    }

    /**
     * Get intitule_formation
     *
     * @return string 
     */
    public function getIntituleFormation()
    {
        return $this->intitule_formation;
    }

    /**
     * Set desir_reorientation
     *
     * @param boolean $desirReorientation
     * @return Formation
     */
    public function setDesirReorientation($desirReorientation)
    {
        $this->desir_reorientation = $desirReorientation;
    
        return $this;
    }

    /**
     * Get desir_reorientation
     *
     * @return boolean 
     */
    public function getDesirReorientation()
    {
        return $this->desir_reorientation;
    }

    /**
     * Set secteur_reorientation
     *
     * @param string $secteurReorientation
     * @return Formation
     */
    public function setSecteurReorientation($secteurReorientation)
    {
        $this->secteur_reorientation = $secteurReorientation;
    
        return $this;
    }

    /**
     * Get secteur_reorientation
     *
     * @return string 
     */
    public function getSecteurReorientation()
    {
        return $this->secteur_reorientation;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Formation
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
    /**
     * Set user_id
     *
     * @param Digin\UserBundle\Entity\User $userId
     * @return Formation
     */
    public function setUserId(\Digin\UserBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return Digin\UserBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
