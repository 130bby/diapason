<?php
namespace Digin\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Digin\UserBundle\Entity\Identite as Identite;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @ORM\OneToOne(targetEntity="Identite", mappedBy="user_id",cascade={"persist"})
     */
    private $identite;
	


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
<<<<<<< HEAD
	
    public function getIdentite()
    {
        return $this->identite;
    }

    public function setIdentite(Identite $identite = null)
    {
		$this->identite = $identite;
    }	
	
	
=======
>>>>>>> 8ff796faa80f69ac6ba1c2063c70b7896653f5c3
}