<?php

namespace App\Entity;

use App\Repository\IndividualRewardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IndividualRewardRepository::class)]
class IndividualReward
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $MVP = null;

    #[ORM\Column(length: 255)]
    private ?string $FMVP = null;

    #[ORM\Column(length: 255)]
    private ?string $ROY = null;

    #[ORM\Column(length: 255)]
    private ?string $DPOY = null;

    #[ORM\Column(length: 255)]
    private ?string $MIP = null;

    #[ORM\Column(length: 255)]
    private ?string $BC = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMVP(): ?string
    {
        return $this->MVP;
    }

    public function setMVP(string $MVP): static
    {
        $this->MVP = $MVP;

        return $this;
    }

    public function getFMVP(): ?string
    {
        return $this->FMVP;
    }

    public function setFMVP(string $FMVP): static
    {
        $this->FMVP = $FMVP;

        return $this;
    }

    public function getROY(): ?string
    {
        return $this->ROY;
    }

    public function setROY(string $ROY): static
    {
        $this->ROY = $ROY;

        return $this;
    }

    public function getDPOY(): ?string
    {
        return $this->DPOY;
    }

    public function setDPOY(string $DPOY): static
    {
        $this->DPOY = $DPOY;

        return $this;
    }

    public function getMIP(): ?string
    {
        return $this->MIP;
    }

    public function setMIP(string $MIP): static
    {
        $this->MIP = $MIP;

        return $this;
    }

    public function getBC(): ?string
    {
        return $this->BC;
    }

    public function setBC(string $BC): static
    {
        $this->BC = $BC;

        return $this;
    }
}
