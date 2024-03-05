<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $points = null;

    #[ORM\OneToOne(inversedBy: 'WestRanking', cascade: ['persist', 'remove'])]
    private ?EstRanking $EstRanking = null;

    #[ORM\OneToOne(inversedBy: 'player', cascade: ['persist', 'remove'])]
    private ?WestRanking $WestRanking = null;

    #[ORM\OneToOne(inversedBy: 'player', cascade: ['persist', 'remove'])]
    private ?EstPlayoff $EstPlayoff = null;

    #[ORM\OneToOne(inversedBy: 'player', cascade: ['persist', 'remove'])]
    private ?WestPlayoff $WestPlayoff = null;

    #[ORM\OneToOne(inversedBy: 'player', cascade: ['persist', 'remove'])]
    private ?IndividualReward $IndividualReward = null;

    #[ORM\OneToOne(inversedBy: 'player', cascade: ['persist', 'remove'])]
    private ?FinalNBA $FinalNBA = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): static
    {
        $this->points = $points;

        return $this;
    }

    public function getEstRanking(): ?EstRanking
    {
        return $this->EstRanking;
    }

    public function setEstRanking(?EstRanking $EstRanking): static
    {
        $this->EstRanking = $EstRanking;

        return $this;
    }

    public function getWestRanking(): ?WestRanking
    {
        return $this->WestRanking;
    }

    public function setWestRanking(?WestRanking $WestRanking): static
    {
        $this->WestRanking = $WestRanking;

        return $this;
    }

    public function getEstPlayoff(): ?EstPlayoff
    {
        return $this->EstPlayoff;
    }

    public function setEstPlayoff(?EstPlayoff $EstPlayoff): static
    {
        $this->EstPlayoff = $EstPlayoff;

        return $this;
    }

    public function getWestPlayoff(): ?WestPlayoff
    {
        return $this->WestPlayoff;
    }

    public function setWestPlayoff(?WestPlayoff $WestPlayoff): static
    {
        $this->WestPlayoff = $WestPlayoff;

        return $this;
    }

    public function getIndividualReward(): ?IndividualReward
    {
        return $this->IndividualReward;
    }

    public function setIndividualReward(?IndividualReward $IndividualReward): static
    {
        $this->IndividualReward = $IndividualReward;

        return $this;
    }

    public function getFinalNBA(): ?FinalNBA
    {
        return $this->FinalNBA;
    }

    public function setFinalNBA(?FinalNBA $FinalNBA): static
    {
        $this->FinalNBA = $FinalNBA;

        return $this;
    }
}
