<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormulaireParticipation
 *
 * @ORM\Table(name="formulaire_participation", indexes={@ORM\Index(name="IDX_3D519C8A6B3CA4B", columns={"id_user"}), @ORM\Index(name="IDX_3D519C8AC0759D98", columns={"id_formation"})})
 * @ORM\Entity
 */
class FormulaireParticipation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_Participation", type="string", length=255, nullable=false)
     */
    private $nomParticipation;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_Participation", type="string", length=255, nullable=false)
     */
    private $prenomParticipation;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Inscription", type="datetime", nullable=true)
     */
    private $dateInscription;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \AppBundle\Entity\Formation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formation", referencedColumnName="id")
     * })
     */
    private $idFormation;


}

