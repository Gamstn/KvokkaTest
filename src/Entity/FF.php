<?php

namespace App\Entity;

use App\Repository\FFRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FFRepository::class)]
class FF
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $dis = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\Column(length: 255)]
    private ?string $figure = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $photo = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDis(): ?string
    {
        return $this->dis;
    }

    public function setDis(string $dis): static
    {
        $this->dis = $dis;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getFigure(): ?string
    {
        return $this->figure;
    }

    public function setFigure(string $figure): static
    {
        $this->figure = $figure;

        return $this;
    }

    public function getPhoto(): array
    {
        return $this->photo;
    }

    public function setPhoto(array $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
}
