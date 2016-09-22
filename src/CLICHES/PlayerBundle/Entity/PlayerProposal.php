<?php

namespace CLICHES\PlayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PlayerProposal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLICHES\PlayerBundle\Entity\PlayerProposalRepository")
 */
class PlayerProposal
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
     * @ORM\OneToMany(targetEntity="CLICHES\PlayerBundle\Entity\PlayerProposalField", mappedBy="playerProposal", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $playerProposalFields;

    /**
     * @ORM\OneToMany(targetEntity="CLICHES\PlayerBundle\Entity\PlayerProposalChoice", mappedBy="playerProposal", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $playerProposalChoices;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    protected $createDate;


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
     * Set playerOeuvre
     *
     * @param \CLICHES\PlayerBundle\Entity\PlayerOeuvre $playerOeuvre
     * @return PlayerProposal
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
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return PlayerProposal
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
     * Constructor
     */
    public function __construct()
    {
        $this->playerProposalFields = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add playerProposalFields
     *
     * @param \CLICHES\PlayerBundle\Entity\PlayerProposalField $playerProposalFields
     * @return PlayerProposal
     */
    public function addPlayerProposalField(\CLICHES\PlayerBundle\Entity\PlayerProposalField $playerProposalFields)
    {
        $this->playerProposalFields[] = $playerProposalFields;

        return $this;
    }

    /**
     * Remove playerProposalFields
     *
     * @param \CLICHES\PlayerBundle\Entity\PlayerProposalField $playerProposalFields
     */
    public function removePlayerProposalField(\CLICHES\PlayerBundle\Entity\PlayerProposalField $playerProposalFields)
    {
        $this->playerProposalFields->removeElement($playerProposalFields);
    }

    /**
     * Get playerProposalFields
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayerProposalFields()
    {
        return $this->playerProposalFields;
    }

    /**
     * Add playerProposalChoices
     *
     * @param \CLICHES\PlayerBundle\Entity\PlayerProposalChoice $playerProposalChoices
     * @return PlayerProposal
     */
    public function addPlayerProposalChoice(\CLICHES\PlayerBundle\Entity\PlayerProposalChoice $playerProposalChoices)
    {
        $this->playerProposalChoices[] = $playerProposalChoices;

        return $this;
    }

    /**
     * Remove playerProposalChoices
     *
     * @param \CLICHES\PlayerBundle\Entity\PlayerProposalChoice $playerProposalChoices
     */
    public function removePlayerProposalChoice(\CLICHES\PlayerBundle\Entity\PlayerProposalChoice $playerProposalChoices)
    {
        $this->playerProposalChoices->removeElement($playerProposalChoices);
    }

    /**
     * Get playerProposalChoices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayerProposalChoices()
    {
        return $this->playerProposalChoices;
    }
}
