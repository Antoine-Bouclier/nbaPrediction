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

    #[ORM\OneToOne(mappedBy: 'FinalNBA', cascade: ['persist', 'remove'])]
    private ?Player $player = null;

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

    public function getPlayer(): ?Player
    {
        return $this->player;
    }

    public function setPlayer(?Player $player): static
    {
        // unset the owning side of the relation if necessary
        if ($player === null && $this->player !== null) {
            $this->player->setFinalNBA(null);
        }

        // set the owning side of the relation if necessary
        if ($player !== null && $player->getFinalNBA() !== $this) {
            $player->setFinalNBA($this);
        }

        $this->player = $player;

        return $this;
    }
}
