<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_catégorie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat�gorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_catégorie", type="string", length=50, nullable=false)
     */
    private $nomCat�gorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_catégorie", type="string", length=150, nullable=false)
     */
    private $descriptionCat�gorie;


}

