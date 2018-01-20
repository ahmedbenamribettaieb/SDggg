<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 17/01/2018
 * Time: 15:30
 */

namespace SDGBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser ;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresse;


    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $numtel;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $specialite;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $fondateur;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="date",length=255)
     */

    private $datedecreation;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $validation;

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
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * @param mixed $numtel
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;
    }

    /**
     * @return mixed
     */
    public function getFondateur()
    {
        return $this->fondateur;
    }

    /**
     * @param mixed $fondateur
     */
    public function setFondateur($fondateur)
    {
        $this->fondateur = $fondateur;
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
    public function getDatedecreation()
    {
        return $this->datedecreation;
    }

    /**
     * @param mixed $datedecreation
     */
    public function setDatedecreation($datedecreation)
    {
        $this->datedecreation = $datedecreation;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * @param mixed $validation
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return string
     */
    public function get_the_role(){
        $rolesTab = $this->getRoles();
        if (in_array('ROLE_MEDECIN', $rolesTab, true))
            return $redirection="ROLE_MEDECIN";
        if (in_array('ROLE_ASSOCIATION', $rolesTab, true))
            return $redirection="ROLE_ASSOCIATION";

    }
}