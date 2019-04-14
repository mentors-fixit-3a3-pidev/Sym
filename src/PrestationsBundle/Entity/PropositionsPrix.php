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
     * @ORM\Column(name="Ã©tat", type="integer", nullable=false)
     */
    private $ã©tat;

    /**
     * @var \Prestations
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Prestations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prestation", referencedColumnName="id_prestation")
     * })
     */
    private $idPrestation;


}

