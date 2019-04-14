<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestations
 *
 * @ORM\Table(name="prestations", indexes={@ORM\Index(name="id_client", columns={"id_client"}), @ORM\Index(name="id_prestataire", columns={"id_prestataire"}), @ORM\Index(name="id_sous_catégorie", columns={"id_sous_categorie"})})
 * @ORM\Entity
 */
class Prestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_prestation", type="integer", nullable=false)
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
     * @ORM\Column(name="etat_prestation", type="integer", nullable=false)
     */
    private $etatPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_prestation", type="string", length=50, nullable=false)
     */
    private $nomPrestation;

    /**
     * @return int
     */
    public function getIdPrestation()
    {
        return $this->idPrestation;
    }

    /**
     * @param int $idPrestation
     */
    public function setIdPrestation($idPrestation)
    {
        $this->idPrestation = $idPrestation;
    }

    /**
     * @return \DateTime
     */
    public function getDatePrestation()
    {
        return $this->datePrestation;
    }

    /**
     * @param \DateTime $datePrestation
     */
    public function setDatePrestation($datePrestation)
    {
        $this->datePrestation = $datePrestation;
    }

    /**
     * @return int
     */
    public function getEtatPrestation()
    {
        return $this->etatPrestation;
    }

    /**
     * @param int $etatPrestation
     */
    public function setEtatPrestation($etatPrestation)
    {
        $this->etatPrestation = $etatPrestation;
    }

    /**
     * @return string
     */
    public function getNomPrestation()
    {
        return $this->nomPrestation;
    }

    /**
     * @param string $nomPrestation
     */
    public function setNomPrestation($nomPrestation)
    {
        $this->nomPrestation = $nomPrestation;
    }

    /**
     * @return string
     */
    public function getDescriptionPrestation()
    {
        return $this->descriptionPrestation;
    }

    /**
     * @param string $descriptionPrestation
     */
    public function setDescriptionPrestation($descriptionPrestation)
    {
        $this->descriptionPrestation = $descriptionPrestation;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return \FosUser
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param \FosUser $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return \FosUser
     */
    public function getIdPrestataire()
    {
        return $this->idPrestataire;
    }

    /**
     * @param \FosUser $idPrestataire
     */
    public function setIdPrestataire($idPrestataire)
    {
        $this->idPrestataire = $idPrestataire;
    }

    /**
     * @return \SousCategories
     */
    public function getIdSousCategorie()
    {
        return $this->idSousCategorie;
    }

    /**
     * @param \SousCategories $idSousCategorie
     */
    public function setIdSousCategorie($idSousCategorie)
    {
        $this->idSousCategorie = $idSousCategorie;
    }

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
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prestataire", referencedColumnName="id")
     * })
     */
    private $idPrestataire;

    /**
     * @var \SousCategories
     *
     * @ORM\ManyToOne(targetEntity="SousCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sous_categorie", referencedColumnName="id_sous_categorie")
     * })
     */
    private $idSousCategorie;


}

