<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_birth", type="date")
     * @Assert\NotBlank(message="Veuillez remplir ce champs")
     * @Assert\Date(message="Veuillez entrer une date valid")
     * @ORM\Column(name="datebirth", type="datetime")
     */
    private $dateBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=100)
     * @Assert\NotBlank(message="Veuillez remplir ce champs")
     * @Assert\Type(
     *     type="numeric",
     *     message="Poids doit etre de type numeric"
     * )
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=100)
     * @Assert\NotBlank(message="Veuillez remplir ce champs")
     * @Assert\Type(
     *     type="numeric",
     *     message="hauteur doit etre de type numeric"
     * )
     */
    private $height;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User",cascade={"persist","remove"})
     * @Assert\Valid
     */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     *
     * @return Patient
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Patient
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Patient
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Patient
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
