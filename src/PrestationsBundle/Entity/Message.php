<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="id_prestataire", columns={"id_prestataire"}), @ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_prestation", columns={"id_prestation"})})
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=150, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="date", nullable=false)
     */
    private $dateMessage;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prestataire", referencedColumnName="id")
     * })
     */
    private $idPrestataire;

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
     * @var \AppBundle\Entity\Prestations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prestations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prestation", referencedColumnName="id_prestation")
     * })
     */
    private $idPrestation;


}

