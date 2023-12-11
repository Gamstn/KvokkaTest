<?php

namespace App\Entity;

use App\Repository\CaFRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaFRepository::class)]
class CaF
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $colors = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getColors(): ?string
    {
        return $this->colors;
    }

    public function setColors(string $colors): static
    {
        $this->colors = $colors;

        return $this;
    }
}
