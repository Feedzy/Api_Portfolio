<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 * @ApiResource()
 */
class Formation
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
    private $Ecole;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Annees;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type_formation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEcole(): ?string
    {
        return $this->Ecole;
    }

    public function setEcole(string $Ecole): self
    {
        $this->Ecole = $Ecole;

        return $this;
    }

    public function getAnnees(): ?string
    {
        return $this->Annees;
    }

    public function setAnnees(string $Annees): self
    {
        $this->Annees = $Annees;

        return $this;
    }

    public function getTypeFormation(): ?string
    {
        return $this->Type_formation;
    }

    public function setTypeFormation(string $Type_formation): self
    {
        $this->Type_formation = $Type_formation;

        return $this;
    }
}
