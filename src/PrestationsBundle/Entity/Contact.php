<?php

namespace PrestationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contact", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContact;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=50, nullable=false)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="objet_contact", type="string", length=50, nullable=false)
     */
    private $objetContact;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_contact", type="string", length=150, nullable=false)
     */
    private $contenuContact;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut_contact", type="integer", nullable=false)
     */
    private $statutContact;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_contact", type="string", length=150, nullable=false)
     */
    private $reponseContact;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_contact", type="date", nullable=false)
     */
    private $dateContact;


}

