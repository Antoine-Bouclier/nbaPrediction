<?php

namespace App\Entity;

use App\Repository\EstPlayoffRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstPlayoffRepository::class)]
class EstPlayoff
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $PI1 = null;

    #[ORM\Column(length: 255)]
    private ?string $PI2 = null;

    #[ORM\Column(length: 255)]
    private ?string $PI3 = null;

    #[ORM\Column(length: 255)]
    private ?string $QF1 = null;

    #[ORM\Column(length: 255)]
    private ?string $QF2 = null;

    #[ORM\Column(length: 255)]
    private ?string $QF3 = null;

    #[ORM\Column(length: 255)]
    private ?string $QF4 = null;

    #[ORM\Column(length: 255)]
    private ?string $DF1 = null;

    #[ORM\Column(length: 255)]
    private ?string $DF2 = null;

    #[ORM\Column(length: 255)]
    private ?string $CF = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPI1(): ?string
    {
        return $this->PI1;
    }

    public function setPI1(string $PI1): static
    {
        $this->PI1 = $PI1;

        return $this;
    }

    public function getPI2(): ?string
    {
        return $this->PI2;
    }

    public function setPI2(string $PI2): static
    {
        $this->PI2 = $PI2;

        return $this;
    }

    public function getPI3(): ?string
    {
        return $this->PI3;
    }

    public function setPI3(string $PI3): static
    {
        $this->PI3 = $PI3;

        return $this;
    }

    public function getQF1(): ?string
    {
        return $this->QF1;
    }

    public function setQF1(string $QF1): static
    {
        $this->QF1 = $QF1;

        return $this;
    }

    public function getQF2(): ?string
    {
        return $this->QF2;
    }

    public function setQF2(string $QF2): static
    {
        $this->QF2 = $QF2;

        return $this;
    }

    public function getQF3(): ?string
    {
        return $this->QF3;
    }

    public function setQF3(string $QF3): static
    {
        $this->QF3 = $QF3;

        return $this;
    }

    public function getQF4(): ?string
    {
        return $this->QF4;
    }

    public function setQF4(string $QF4): static
    {
        $this->QF4 = $QF4;

        return $this;
    }

    public function getDF1(): ?string
    {
        return $this->DF1;
    }

    public function setDF1(string $DF1): static
    {
        $this->DF1 = $DF1;

        return $this;
    }

    public function getDF2(): ?string
    {
        return $this->DF2;
    }

    public function setDF2(string $DF2): static
    {
        $this->DF2 = $DF2;

        return $this;
    }

    public function getCF(): ?string
    {
        return $this->CF;
    }

    public function setCF(string $CF): static
    {
        $this->CF = $CF;

        return $this;
    }
}
