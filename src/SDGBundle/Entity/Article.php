<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 20/01/2018
 * Time: 02:11
 */

namespace SDGBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
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
    private $specialite;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn(name="medecin_id" ,referencedColumnName="id")
     */
    private $idmedecin;

    /**
     * Article constructor.
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
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
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
    public function getIdmedecin()
    {
        return $this->idmedecin;
    }

    /**
     * @param mixed $idmedecin
     */
    public function setIdmedecin($idmedecin)
    {
        $this->idmedecin = $idmedecin;
    }


}