<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponses
 *
 * @ORM\Table(name="reponses", indexes={@ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_question", columns={"id_question"})})
 * @ORM\Entity
 */
class Reponses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reponse", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_reponse", type="string", length=150, nullable=false)
     */
    private $contenuReponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reponse", type="date", nullable=false)
     */
    private $dateReponse;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var \AppBundle\Entity\Questions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Questions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id_question")
     * })
     */
    private $idQuestion;


}

