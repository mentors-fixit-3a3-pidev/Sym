<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestations
 *
 * @ORM\Table(name="prestations", indexes={@ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_prestataire", columns={"id_prestataire"}), @ORM\Index(name="id_sous_catégorie", columns={"id_sous_catégorie"})})
 * @ORM\Entity
 */
class Prestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPrestation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_prestation", type="date", nullable=false)
     */
    private $datePrestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="état_prestation", type="integer", nullable=false)
     */
    private $�tatPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prestation", type="string", length=50, nullable=false)
     */
    private $nomPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="description_prestation", type="string", length=150, nullable=false)
     */
    private $descriptionPrestation;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

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
     * @var \AppBundle\Entity\FosUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prestataire", referencedColumnName="id")
     * })
     */
    private $idPrestataire;

    /**
     * @var \AppBundle\Entity\SousCategories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SousCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_catégorie", referencedColumnName="id_sous_catégorie")
     * })
     */
    private $idSousCat�gorie;


}

