<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropositionsPrix
 *
 * @ORM\Table(name="propositions_prix", indexes={@ORM\Index(name="id_prestation", columns={"id_prestation"})})
 * @ORM\Entity
 */
class PropositionsPrix
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="état", type="integer", nullable=false)
     */
    private $�tat;

    /**
     * @var \AppBundle\Entity\Prestations
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Prestations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prestation", referencedColumnName="id_prestation", unique=true)
     * })
     */
    private $idPrestation;


}

