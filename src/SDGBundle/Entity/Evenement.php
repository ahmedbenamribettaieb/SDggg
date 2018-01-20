<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 20/01/2018
 * Time: 02:05
 */

namespace SDGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="evenement")
 */
class Evenement
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer",length=255)
     */
    private $id;


    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse;
    /**
     * @ORM\Column(type="date",length=255)
     */

    private $dateevenement;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn(name="association_id" ,referencedColumnName="id")
     */
    private $idassociation;

    /**
     * Evenement constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getDateevenement()
    {
        return $this->dateevenement;
    }

    /**
     * @param mixed $dateevenement
     */
    public function setDateevenement($dateevenement)
    {
        $this->dateevenement = $dateevenement;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIdassociation()
    {
        return $this->idassociation;
    }

    /**
     * @param mixed $idassociation
     */
    public function setIdassociation($idassociation)
    {
        $this->idassociation = $idassociation;
    }


}