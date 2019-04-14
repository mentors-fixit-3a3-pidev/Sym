<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity
 */
class Events
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=255, nullable=false)
     */
    private $nomEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_De_Place", type="integer", nullable=false)
     */
    private $nbrDePlace;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_Event", type="string", length=255, nullable=false)
     */
    private $lieuEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="URL_Event_video", type="string", length=255, nullable=false)
     */
    private $urlEventVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Event", type="string", length=255, nullable=false)
     */
    private $descriptionEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;


}

