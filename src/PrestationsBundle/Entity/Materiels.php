<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiels
 *
 * @ORM\Table(name="materiels", indexes={@ORM\Index(name="id_categorie", columns={"id_categorie"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Materiels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_materiel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMateriel;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_materiel", type="string", length=255, nullable=false)
     */
    private $nomMateriel;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_location", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixLocation;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorie;


}

