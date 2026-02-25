<?php

namespace App\Entity;

use App\Repository\SkinRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkinRepository::class)]
class Skin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $weapon = null;

    #[ORM\Column(length: 255)]
    private ?string $rarity = null;

    #[ORM\Column]
    private ?float $float = null;

    #[ORM\Column]
    private ?int $pattern = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $stattrak = null;

    #[ORM\Column(length: 1000)]
    private ?string $coleccion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $souvenir = null;

    #[ORM\Column]
    private ?int $seed = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(length: 1000)]
    private ?string $image = null;

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

    public function getWeapon(): ?string
    {
        return $this->weapon;
    }

    public function setWeapon(string $weapon): static
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getRarity(): ?string
    {
        return $this->rarity;
    }

    public function setRarity(string $rarity): static
    {
        $this->rarity = $rarity;

        return $this;
    }

    public function getFloat(): ?float
    {
        return $this->float;
    }

    public function setFloat(float $float): static
    {
        $this->float = $float;

        return $this;
    }

    public function getPattern(): ?int
    {
        return $this->pattern;
    }

    public function setPattern(int $pattern): static
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function getStattrak(): ?string
    {
        return $this->stattrak;
    }

    public function setStattrak(?string $stattrak): static
    {
        $this->stattrak = $stattrak;

        return $this;
    }

    public function getColeccion(): ?string
    {
        return $this->coleccion;
    }

    public function setColeccion(string $coleccion): static
    {
        $this->coleccion = $coleccion;

        return $this;
    }

    public function getSouvenir(): ?string
    {
        return $this->souvenir;
    }

    public function setSouvenir(?string $souvenir): static
    {
        $this->souvenir = $souvenir;

        return $this;
    }

    public function getSeed(): ?string
    {
        return $this->seed;
    }

    public function setSeed(string $seed): static
    {
        $this->seed = $seed;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
