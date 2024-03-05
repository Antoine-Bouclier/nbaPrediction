<?php

namespace App\Entity;

use App\Repository\EstRankingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstRankingRepository::class)]
class EstRanking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $first = null;

    #[ORM\Column(length: 255)]
    private ?string $second = null;

    #[ORM\Column(length: 255)]
    private ?string $third = null;

    #[ORM\Column(length: 255)]
    private ?string $fourth = null;

    #[ORM\Column(length: 255)]
    private ?string $fifth = null;

    #[ORM\Column(length: 255)]
    private ?string $sixth = null;

    #[ORM\Column(length: 255)]
    private ?string $seventh = null;

    #[ORM\Column(length: 255)]
    private ?string $eighth = null;

    #[ORM\Column(length: 255)]
    private ?string $ninth = null;

    #[ORM\Column(length: 255)]
    private ?string $tenth = null;

    #[ORM\Column(length: 255)]
    private ?string $eleventh = null;

    #[ORM\Column(length: 255)]
    private ?string $twelfth = null;

    #[ORM\Column(length: 255)]
    private ?string $Thirteenth = null;

    #[ORM\Column(length: 255)]
    private ?string $fourteenth = null;

    #[ORM\Column(length: 255)]
    private ?string $fifteenth = null;

    #[ORM\OneToOne(mappedBy: 'EstRanking', cascade: ['persist', 'remove'])]
    private ?Player $player = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirst(): ?string
    {
        return $this->first;
    }

    public function setFirst(string $first): static
    {
        $this->first = $first;

        return $this;
    }

    public function getSecond(): ?string
    {
        return $this->second;
    }

    public function setSecond(string $second): static
    {
        $this->second = $second;

        return $this;
    }

    public function getThird(): ?string
    {
        return $this->third;
    }

    public function setThird(string $third): static
    {
        $this->third = $third;

        return $this;
    }

    public function getFourth(): ?string
    {
        return $this->fourth;
    }

    public function setFourth(string $fourth): static
    {
        $this->fourth = $fourth;

        return $this;
    }

    public function getFifth(): ?string
    {
        return $this->fifth;
    }

    public function setFifth(string $fifth): static
    {
        $this->fifth = $fifth;

        return $this;
    }

    public function getSixth(): ?string
    {
        return $this->sixth;
    }

    public function setSixth(string $sixth): static
    {
        $this->sixth = $sixth;

        return $this;
    }

    public function getSeventh(): ?string
    {
        return $this->seventh;
    }

    public function setSeventh(string $seventh): static
    {
        $this->seventh = $seventh;

        return $this;
    }

    public function getEighth(): ?string
    {
        return $this->eighth;
    }

    public function setEighth(string $eighth): static
    {
        $this->eighth = $eighth;

        return $this;
    }

    public function getNinth(): ?string
    {
        return $this->ninth;
    }

    public function setNinth(string $ninth): static
    {
        $this->ninth = $ninth;

        return $this;
    }

    public function getTenth(): ?string
    {
        return $this->tenth;
    }

    public function setTenth(string $tenth): static
    {
        $this->tenth = $tenth;

        return $this;
    }

    public function getEleventh(): ?string
    {
        return $this->eleventh;
    }

    public function setEleventh(string $eleventh): static
    {
        $this->eleventh = $eleventh;

        return $this;
    }

    public function getTwelfth(): ?string
    {
        return $this->twelfth;
    }

    public function setTwelfth(string $twelfth): static
    {
        $this->twelfth = $twelfth;

        return $this;
    }

    public function getThirteenth(): ?string
    {
        return $this->Thirteenth;
    }

    public function setThirteenth(string $Thirteenth): static
    {
        $this->Thirteenth = $Thirteenth;

        return $this;
    }

    public function getFourteenth(): ?string
    {
        return $this->fourteenth;
    }

    public function setFourteenth(string $fourteenth): static
    {
        $this->fourteenth = $fourteenth;

        return $this;
    }

    public function getFifteenth(): ?string
    {
        return $this->fifteenth;
    }

    public function setFifteenth(string $fifteenth): static
    {
        $this->fifteenth = $fifteenth;

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
            $this->player->setEstRanking(null);
        }

        // set the owning side of the relation if necessary
        if ($player !== null && $player->getEstRanking() !== $this) {
            $player->setEstRanking($this);
        }

        $this->player = $player;

        return $this;
    }
}
