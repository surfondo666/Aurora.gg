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

    // CAMBIO: Reemplazamos youtubeId por videoFilename
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $videoFilename = null;

    // NUEVO: Campo para subir una imagen de portada manual
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $thumbnailFilename = null;

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

    // Getters y Setters para el Video
    public function getVideoFilename(): ?string
    {
        return $this->videoFilename;
    }

    public function setVideoFilename(?string $videoFilename): static
    {
        $this->videoFilename = $videoFilename;
        return $this;
    }

    // Getters y Setters para la Miniatura
    public function getThumbnailFilename(): ?string
    {
        return $this->thumbnailFilename;
    }

    public function setThumbnailFilename(?string $thumbnailFilename): static
    {
        $this->thumbnailFilename = $thumbnailFilename;
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