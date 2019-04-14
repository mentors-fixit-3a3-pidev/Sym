<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategories
 *
 * @ORM\Table(name="sous_categories", indexes={@ORM\Index(name="id_categorie", columns={"id_categorie"})})
 * @ORM\Entity
 */
class SousCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_sous_categorie", type="string", length=50, nullable=false)
     */
    private $nomSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sous_categorie", type="string", length=150, nullable=false)
     */
    private $descriptionSousCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="urgence", type="integer", nullable=false)
     */
    private $urgence;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorie;

    /**
     * @return int
     */
    public function getIdSousCategorie()
    {
        return $this->idSousCategorie;
    }

    /**
     * @param int $idSousCategorie
     */
    public function setIdSousCategorie($idSousCategorie)
    {
        $this->idSousCategorie = $idSousCategorie;
    }

    /**
     * @return string
     */
    public function getNomSousCategorie()
    {
        return $this->nomSousCategorie;
    }

    /**
     * @param string $nomSousCategorie
     */
    public function setNomSousCategorie($nomSousCategorie)
    {
        $this->nomSousCategorie = $nomSousCategorie;
    }

    /**
     * @return string
     */
    public function getDescriptionSousCategorie()
    {
        return $this->descriptionSousCategorie;
    }

    /**
     * @param string $descriptionSousCategorie
     */
    public function setDescriptionSousCategorie($descriptionSousCategorie)
    {
        $this->descriptionSousCategorie = $descriptionSousCategorie;
    }

    /**
     * @return int
     */
    public function getUrgence()
    {
        return $this->urgence;
    }

    /**
     * @param int $urgence
     */
    public function setUrgence($urgence)
    {
        $this->urgence = $urgence;
    }

    /**
     * @return \Categories
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param \Categories $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }
    function __toString()
    {
        return $this->nomSousCategorie;
    }

}

