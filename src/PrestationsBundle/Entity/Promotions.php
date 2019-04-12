<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotions
 *
 * @ORM\Table(name="promotions", indexes={@ORM\Index(name="id_materiel", columns={"id_materiel"})})
 * @ORM\Entity
 */
class Promotions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_promotion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromotion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="pourcentage_promotion", type="integer", nullable=false)
     */
    private $pourcentagePromotion;

    /**
     * @var \AppBundle\Entity\Materiels
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Materiels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_materiel", referencedColumnName="id_materiel")
     * })
     */
    private $idMateriel;


}

