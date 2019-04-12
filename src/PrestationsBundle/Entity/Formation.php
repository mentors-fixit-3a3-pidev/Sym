<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="IDX_404021BFD52B4B97", columns={"id_event"})})
 * @ORM\Entity
 */
class Formation
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
     * @ORM\Column(name="nom_Formation", type="string", length=255, nullable=false)
     */
    private $nomFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="description_Formation", type="string", length=255, nullable=false)
     */
    private $descriptionFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="langue_Formation", type="string", length=255, nullable=false)
     */
    private $langueFormation;

    /**
     * @var \AppBundle\Entity\Events
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_event", referencedColumnName="id")
     * })
     */
    private $idEvent;


}

