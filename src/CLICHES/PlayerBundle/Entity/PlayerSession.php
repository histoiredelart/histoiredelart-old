<?php

namespace CLICHES\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PlayerSession
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLICHES\PlayerBundle\Entity\PlayerSessionRepository")
 */
class PlayerSession
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
     * @ORM\ManyToOne(targetEntity="DATA\TeachingBundle\Entity\Teaching")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $teaching;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="dateBegin", type="datetime", nullable=true)
     */
    protected $dateBegin;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnd", type="datetime", nullable=true)
     */
    protected $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="proposalType", type="string", nullable=true)
     */
    private $proposalType;

    /**
     * @var string
     *
     * @ORM\Column(name="simpleSession", type="boolean", nullable=true, options="default: false;")
     */
    private $simpleSession;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=255, nullable=true)
     */
    protected $context;

    /**
     * @var string
     * @Assert\Ip
     *
     * @ORM\Column(name="ipPlayerUser", type="string", length=255, nullable=true)
     */
    protected $ipPlayerUser;

    /**
     * @var string
     *
     * @ORM\Column(name="userFacebookId", type="string", nullable=true)
     */
    private $userFacebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="userFacebookLocal", type="string", nullable=true)
     */
    private $userFacebookLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="userFacebookRef", type="string", nullable=true)
     */
    private $userFacebookRef;

    /**
     * @var string
     *
     * @ORM\Column(name="userFacebookTimezone", type="string", nullable=true)
     */
    private $userFacebookTimezone;

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

    /**
     * @var string
     *
     * @ORM\Column(name="HTTPUSERAGENT", type="string", length=255, nullable=true)
     */
    protected $HTTP_USER_AGENT;


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
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     * @return PlayerSession
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime 
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return PlayerSession
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return PlayerSession
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
     * @return PlayerSession
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
     * Set teaching
     *
     * @param \DATA\TeachingBundle\Entity\Teaching teaching
     * @return PlayerSession
     */
    public function setTeaching(\DATA\TeachingBundle\Entity\Teaching $teaching = null)
    {
        $this->teaching = $teaching;

        return $this;
    }

    /**
     * Get teaching
     *
     * @return \DATA\TeachingBundle\Entity\Teaching
     */
    public function getTeaching()
    {
        return $this->teaching;
    }

    /**
     * Set createUser
     *
     * @param \CAS\UserBundle\Entity\User $createUser
     * @return PlayerSession
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
     * @return PlayerSession
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
     * Set ipPlayerUser
     *
     * @param string $ipPlayerUser
     * @return PlayerSession
     */
    public function setIpPlayerUser($ipPlayerUser)
    {
        $this->ipPlayerUser = $ipPlayerUser;

        return $this;
    }

    /**
     * Get ipPlayerUser
     *
     * @return string 
     */
    public function getIpPlayerUser()
    {
        return $this->ipPlayerUser;
    }

    /**
     * Set simpleSession
     *
     * @param boolean $simpleSession
     * @return PlayerSession
     */
    public function setSimpleSession($simpleSession)
    {
        $this->simpleSession = $simpleSession;

        return $this;
    }

    /**
     * Get simpleSession
     *
     * @return boolean 
     */
    public function getSimpleSession()
    {
        return $this->simpleSession;
    }

    /**
     * Set HTTP_USER_AGENT
     *
     * @param string $hTTPUSERAGENT
     * @return PlayerSession
     */
    public function setHTTPUSERAGENT($hTTPUSERAGENT)
    {
        $this->HTTP_USER_AGENT = $hTTPUSERAGENT;

        return $this;
    }

    /**
     * Get HTTP_USER_AGENT
     *
     * @return string 
     */
    public function getHTTPUSERAGENT()
    {
        return $this->HTTP_USER_AGENT;
    }

    /**
     * Set proposalType
     *
     * @param string $proposalType
     * @return PlayerSession
     */
    public function setProposalType($proposalType)
    {
        $this->proposalType = $proposalType;

        return $this;
    }

    /**
     * Get proposalType
     *
     * @return string 
     */
    public function getProposalType()
    {
        return $this->proposalType;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return PlayerSession
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string 
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set userFacebookId
     *
     * @param string $userFacebookId
     * @return PlayerSession
     */
    public function setUserFacebookId($userFacebookId)
    {
        $this->userFacebookId = $userFacebookId;

        return $this;
    }

    /**
     * Get userFacebookId
     *
     * @return string
     */
    public function getUserFacebookId()
    {
        return $this->userFacebookId;
    }

    /**
     * Set userFacebookLocal
     *
     * @param string $userFacebookLocal
     * @return string
     */
    public function setUserFacebookLocal($userFacebookLocal)
    {
        $this->userFacebookLocal = $userFacebookLocal;

        return $this;
    }

    /**
     * Get userFacebookLocal
     *
     * @return string
     */
    public function getUserFacebookLocal()
    {
        return $this->userFacebookLocal;
    }

    /**
     * Set userFacebookRef
     *
     * @param string $userFacebookRef
     * @return PlayerSession
     */
    public function setUserFacebookRef($userFacebookRef)
    {
        $this->userFacebookRef = $userFacebookRef;

        return $this;
    }

    /**
     * Get userFacebookRef
     *
     * @return string
     */
    public function getUserFacebookRef()
    {
        return $this->userFacebookRef;
    }

    /**
     * Set userFacebookTimezone
     *
     * @param string $userFacebookTimezone
     * @return PlayerSession
     */
    public function setUserFacebookTimezone($userFacebookTimezone)
    {
        $this->userFacebookTimezone = $userFacebookTimezone;

        return $this;
    }

    /**
     * Get userFacebookTimezone
     *
     * @return string
     */
    public function getUserFacebookTimezone()
    {
        return $this->userFacebookTimezone;
    }
}
