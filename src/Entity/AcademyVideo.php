<?php

namespace App\Entity;

use App\Repository\AcademyVideoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcademyVideoRepository::class)]
class AcademyVideo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $urlOriginal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $clipId = null;

    // NUEVO: URL para la miniatura externa
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $thumbnailUrl = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column(length: 50)]
    private ?string $map = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getUrlOriginal(): ?string
    {
        return $this->urlOriginal;
    }

    public function setUrlOriginal(?string $urlOriginal): static
    {
        $this->urlOriginal = $urlOriginal;
        return $this;
    }

    public function getClipId(): ?string
    {
        return $this->clipId;
    }

    public function setClipId(?string $clipId): static
    {
        $this->clipId = $clipId;
        return $this;
    }

    // Getters y Setters para la Miniatura
    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(?string $thumbnailUrl): static
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getMap(): ?string
    {
        return $this->map;
    }

    public function setMap(string $map): static
    {
        $this->map = $map;
        return $this;
    }
}