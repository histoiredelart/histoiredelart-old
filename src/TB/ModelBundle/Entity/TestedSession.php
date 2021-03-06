<?php

namespace TB\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TestedSession
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TB\ModelBundle\Entity\TestedSessionRepository")
 */
class TestedSession
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
     * @ORM\Column(name="tooSmallWindow", type="boolean", nullable=true)
     */
    private $tooSmallWindow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isRandomized", type="boolean")
     */
    private $isRandomized;

    /**
     * @ORM\ManyToOne(targetEntity="TB\ModelBundle\Entity\TestedGame")
     * @ORM\JoinColumn(nullable=false)
     */
    private $testedGame;

    /**
     * @ORM\ManyToOne(targetEntity="CAS\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $createUser;

    /**
     * @var string
     * @Assert\Ip
     *
     * @ORM\Column(name="ipCreateUser", type="string", length=255, nullable=true)
     */
    protected $ipCreateUser;

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
     * Set isRandomized
     *
     * @param boolean $isRandomized
     * @return TestedSession
     */
    public function setIsRandomized($isRandomized)
    {
        $this->isRandomized = $isRandomized;

        return $this;
    }

    /**
     * Get isRandomized
     *
     * @return boolean 
     */
    public function getIsRandomized()
    {
        return $this->isRandomized;
    }

    /**
     * Set ipCreateUser
     *
     * @param string $ipCreateUser
     * @return TestedSession
     */
    public function setIpCreateUser($ipCreateUser)
    {
        $this->ipCreateUser = $ipCreateUser;

        return $this;
    }

    /**
     * Get ipCreateUser
     *
     * @return string 
     */
    public function getIpCreateUser()
    {
        return $this->ipCreateUser;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return TestedSession
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
     * @return TestedSession
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
     * Set testedGame
     *
     * @param \TB\ModelBundle\Entity\TestedGame $testedGame
     * @return TestedSession
     */
    public function setTestedGame(\TB\ModelBundle\Entity\TestedGame $testedGame)
    {
        $this->testedGame = $testedGame;

        return $this;
    }

    /**
     * Get testedGame
     *
     * @return \TB\ModelBundle\Entity\TestedGame 
     */
    public function getTestedGame()
    {
        return $this->testedGame;
    }

    /**
     * Set createUser
     *
     * @param \CAS\UserBundle\Entity\User $createUser
     * @return TestedSession
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
     * @return TestedSession
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
     * Set tooSmallWindow
     *
     * @param boolean $tooSmallWindow
     * @return TestedSession
     */
    public function setTooSmallWindow($tooSmallWindow)
    {
        $this->tooSmallWindow = $tooSmallWindow;

        return $this;
    }

    /**
     * Get tooSmallWindow
     *
     * @return boolean 
     */
    public function getTooSmallWindow()
    {
        return $this->tooSmallWindow;
    }
}
