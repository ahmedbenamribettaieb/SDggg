<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 21/01/2018
 * Time: 00:37
 */

namespace SDGBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @ORM\Entity
 * @ORM\Table(name="sos")
 * @Vich\Uploadable
 */

class Sos
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
    private $titre;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn(name="association_id" ,referencedColumnName="id")
     */
    private $idAssociation;

    /**
     * Sos constructor.
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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
    public function getIdAssociation()
    {
        return $this->idAssociation;
    }

    /**
     * @param mixed $idAssociation
     */
    public function setIdAssociation($idAssociation)
    {
        $this->idAssociation = $idAssociation;
    }


    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    // ...

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }


}