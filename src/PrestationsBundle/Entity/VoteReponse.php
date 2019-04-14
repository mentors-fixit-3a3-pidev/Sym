<?php

namespace PrestationsBundle\Entity;

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
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var \Reponses
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Reponses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reponse", referencedColumnName="id_reponse")
     * })
     */
    private $idReponse;


}

