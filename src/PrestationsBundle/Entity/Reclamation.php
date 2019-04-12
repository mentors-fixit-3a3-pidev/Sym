<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_utilisateur", columns={"id_utilisateur"}), @ORM\Index(name="id_prestation", columns={"id_prestation"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reclamation", type="string", length=150, nullable=false)
     */
    private $descriptionReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_reclamation", type="string", length=50, nullable=false)
     */
    private $objetReclamation;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut_reclamation", type="integer", nullable=false)
     */
    private $statutReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_reclamation", type="string", length=150, nullable=false)
     */
    private $reponseReclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reclamation", type="date", nullable=false)
     */
    private $dateReclamation;

    /**
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id")
     * })
     */
    private $idUtilisateur;

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

