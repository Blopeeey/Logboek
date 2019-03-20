<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $begeleidingsbrief;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chauffeur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Truck", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $truck;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $aantalm3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $laadlocatie;

    /**
     * @ORM\Column(type="time")
     */
    private $tijdvertrek;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bestemming;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $evenement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="logboeks")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBegeleidingsbrief(): ?string
    {
        return $this->begeleidingsbrief;
    }

    public function setBegeleidingsbrief(string $begeleidingsbrief): self
    {
        $this->begeleidingsbrief = $begeleidingsbrief;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getChauffeur(): ?user
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?user $chauffeur): self
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getTruck(): ?truck
    {
        return $this->truck;
    }

    public function setTruck(?truck $truck): self
    {
        $this->truck = $truck;

        return $this;
    }

    public function getAantalm3()
    {
        return $this->aantalm3;
    }

    public function setAantalm3($aantalm3): self
    {
        $this->aantalm3 = $aantalm3;

        return $this;
    }

    public function getLaadlocatie(): ?string
    {
        return $this->laadlocatie;
    }

    public function setLaadlocatie(string $laadlocatie): self
    {
        $this->laadlocatie = $laadlocatie;

        return $this;
    }

    public function getTijdvertrek(): ?\DateTimeInterface
    {
        return $this->tijdvertrek;
    }

    public function setTijdvertrek(\DateTimeInterface $tijdvertrek): self
    {
        $this->tijdvertrek = $tijdvertrek;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->bestemming;
    }

    public function setBestemming(string $bestemming): self
    {
        $this->bestemming = $bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?user $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
