<?php

namespace CLICHES\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PlayerError
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLICHES\PlayerBundle\Entity\PlayerErrorRepository")
 */
class PlayerError
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
     * @ORM\ManyToOne(targetEntity="CLICHES\PlayerBundle\Entity\PlayerOeuvre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $playerOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="playerErrorComment", type="string", length=255, nullable=true)
     */
    private $playerErrorComment;

    /**
     * @var string
     *
     * @ORM\Column(name="playerErrorTraitement", type="boolean", options="default: false;")
     */
    private $playerErrorTraitement;
    
    /**
     * @var string
     *
     * @ORM\Column(name="playerErrorAccept", type="boolean", nullable=true, options="default: false;")
     */
    private $playerErrorAccept;

    /**
     * @var string
     *
     * @ORM\Column(name="playerErrorAcceptExplain", type="string", length=255, nullable=true)
     */
    private $playerErrorAcceptExplain;

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
    protected $createUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ipCreateUser", type="string", length=255, nullable=true)
     */
    protected $ipCreateUser;


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
     * Set playerErrorComment
     *
     * @param string $playerErrorComment
     * @return PlayerError
     */
    public function setPlayerErrorComment($playerErrorComment)
    {
        $this->playerErrorComment = $playerErrorComment;

        return $this;
    }

    /**
     * Get playerErrorComment
     *
     * @return string 
     */
    public function getPlayerErrorComment()
    {
        return $this->playerErrorComment;
    }

    /**
     * Set playerErrorTraitement
     *
     * @param boolean $playerErrorTraitement
     * @return PlayerError
     */
    public function setPlayerErrorTraitement($playerErrorTraitement)
    {
        $this->playerErrorTraitement = $playerErrorTraitement;

        return $this;
    }

    /**
     * Get playerErrorTraitement
     *
     * @return boolean 
     */
    public function getPlayerErrorTraitement()
    {
        return $this->playerErrorTraitement;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return PlayerError
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
     * Set playerOeuvre
     *
     * @param \CLICHES\PlayerBundle\Entity\PlayerOeuvre $playerOeuvre
     * @return PlayerError
     */
    public function setPlayerOeuvre(\CLICHES\PlayerBundle\Entity\PlayerOeuvre $playerOeuvre)
    {
        $this->playerOeuvre = $playerOeuvre;

        return $this;
    }

    /**
     * Get playerOeuvre
     *
     * @return \CLICHES\PlayerBundle\Entity\PlayerOeuvre 
     */
    public function getPlayerOeuvre()
    {
        return $this->playerOeuvre;
    }

    /**
     * Set ipCreateUser
     *
     * @param string $ipCreateUser
     * @return PlayerError
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
     * Set createUser
     *
     * @param \CAS\UserBundle\Entity\User $createUser
     * @return PlayerError
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
     * Set playerErrorAccept
     *
     * @param boolean $playerErrorAccept
     * @return PlayerError
     */
    public function setPlayerErrorAccept($playerErrorAccept)
    {
        $this->playerErrorAccept = $playerErrorAccept;

        return $this;
    }

    /**
     * Get playerErrorAccept
     *
     * @return boolean 
     */
    public function getPlayerErrorAccept()
    {
        return $this->playerErrorAccept;
    }

    /**
     * Set playerErrorAcceptExplain
     *
     * @param string $playerErrorAcceptExplain
     * @return PlayerError
     */
    public function setPlayerErrorAcceptExplain($playerErrorAcceptExplain)
    {
        $this->playerErrorAcceptExplain = $playerErrorAcceptExplain;

        return $this;
    }

    /**
     * Get playerErrorAcceptExplain
     *
     * @return string 
     */
    public function getPlayerErrorAcceptExplain()
    {
        return $this->playerErrorAcceptExplain;
    }
}
