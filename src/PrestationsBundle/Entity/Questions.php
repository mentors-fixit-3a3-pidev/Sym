<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_question", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_question", type="string", length=50, nullable=false)
     */
    private $titreQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="description_question", type="string", length=150, nullable=false)
     */
    private $descriptionQuestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_question", type="integer", nullable=false)
     */
    private $etatQuestion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_question", type="date", nullable=false)
     */
    private $dateQuestion;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;


}

