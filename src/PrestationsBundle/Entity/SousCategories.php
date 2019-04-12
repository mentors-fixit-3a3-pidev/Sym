<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategories
 *
 * @ORM\Table(name="sous_categories", indexes={@ORM\Index(name="id_catégorie", columns={"id_catégorie"})})
 * @ORM\Entity
 */
class SousCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_catégorie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousCat�gorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_sous_catégorie", type="string", length=50, nullable=false)
     */
    private $nomSousCat�gorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sous_catégorie", type="string", length=150, nullable=false)
     */
    private $descriptionSousCat�gorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgence", type="integer", nullable=false)
     */
    private $urgence;

    /**
     * @var \AppBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_catégorie", referencedColumnName="id_catégorie")
     * })
     */
    private $idCat�gorie;


}

