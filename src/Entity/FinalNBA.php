<?php

namespace App\Entity;

use App\Repository\FinalNBARepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FinalNBARepository::class)]
class FinalNBA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $champion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChampion(): ?string
    {
        return $this->champion;
    }

    public function setChampion(string $champion): static
    {
        $this->champion = $champion;

        return $this;
    }
}
