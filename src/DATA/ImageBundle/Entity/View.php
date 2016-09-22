<?php

namespace DATA\ImageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * View
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DATA\ImageBundle\Entity\ViewRepository")
 */
class View
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
     * @var boolean
     *
     * @ORM\Column(name="isPlan", type="boolean", nullable=true)
     */
    private $isPlan;

    /**
     * @var string
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Le champ 'Vue' ne peut pas dépasser {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="vue", type="string", length=255, nullable=true)
     */
    private $vue;

    /**
     * @var string
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Le champ 'Titre' ne peut pas dépasser {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Le champ 'Iconographie' ne peut pas dépasser {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="iconography", type="string", length=255, nullable=true)
     */
    private $iconography;

    /**
     * @var string
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Le champ 'Emplacement' ne peut pas dépasser {{ limit }} caractères"
     * )
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var integer
     * Champ permettant d'indiquer le positionnement de la vue au sein de l'oeuvre
     *
     * @ORM\Column(name="orderView", type="integer", nullable=true)
     */
    private $orderView;

    /**
     * @ORM\ManyToOne(targetEntity="DATA\DataBundle\Entity\Entity")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $entity;

    /**
     * @ORM\ManyToOne(targetEntity="CAS\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $createUser;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    protected $createDate;

    /**
     * @ORM\ManyToOne(targetEntity="CAS\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $updateUser;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updateDate", type="datetime", nullable=true)
     */
    protected $updateDate;


    public function get($attribute)
    {
        return $this->{$attribute};
    }

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
     * Set isPlan
     *
     * @param boolean $isPlan
     * @return View
     */
    public function setIsPlan($isPlan)
    {
        $this->isPlan = $isPlan;

        return $this;
    }

    /**
     * Get isPlan
     *
     * @return boolean 
     */
    public function getIsPlan()
    {
        return $this->isPlan;
    }

    /**
     * Set vue
     *
     * @param string $vue
     * @return View
     */
    public function setVue($vue)
    {
        $this->vue = $vue;

        return $this;
    }

    /**
     * Get vue
     *
     * @return string 
     */
    public function getVue()
    {
        return $this->vue;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return View
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return View
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set createUser
     *
     * @param \CAS\UserBundle\Entity\User $createUser
     * @return View
     */
    public function setCreateUser(\CAS\UserBundle\Entity\User $createUser = null)
    {
        $this->createUser = $createUser;

        return $this;
    }

    /**
     * Get createUser
     *
     * @return \CAS\UserBundle\Entity\User
     */
    public function getCreateUser()
    {
        return $this->createUser;
    }

    /**
     * Set updateUser
     *
     * @param \CAS\UserBundle\Entity\User $updateUser
     * @return View
     */
    public function setUpdateUser(\CAS\UserBundle\Entity\User $updateUser = null)
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    /**
     * Get updateUser
     *
     * @return \CAS\UserBundle\Entity\User
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return View
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set iconography
     *
     * @param string $iconography
     * @return View
     */
    public function setIconography($iconography)
    {
        $this->iconography = $iconography;

        return $this;
    }

    /**
     * Get iconography
     *
     * @return string 
     */
    public function getIconography()
    {
        return $this->iconography;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return View
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set orderView
     *
     * @param integer $orderView
     * @return View
     */
    public function setOrderView($orderView)
    {
        $this->orderView = $orderView;

        return $this;
    }

    /**
     * Get orderView
     *
     * @return integer 
     */
    public function getOrderView()
    {
        return $this->orderView;
    }

    /**
     * Set entity
     *
     * @param \DATA\DataBundle\Entity\Entity $entity
     * @return View
     */
    public function setEntity(\DATA\DataBundle\Entity\Entity $entity = null)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * Get entity
     *
     * @return \DATA\DataBundle\Entity\Entity 
     */
    public function getEntity()
    {
        return $this->entity;
    }
}
