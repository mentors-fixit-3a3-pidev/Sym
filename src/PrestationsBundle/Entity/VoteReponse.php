<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteReponse
 *
 * @ORM\Table(name="vote_reponse", indexes={@ORM\Index(name="id_reponse", columns={"id_reponse"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class VoteReponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type_vote", type="integer", nullable=false)
     */
    private $typeVote;

    /**
     * @var \AppBundle\Entity\Reponses
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Reponses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reponse", referencedColumnName="id_reponse", unique=true)
     * })
     */
    private $idReponse;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;


}

