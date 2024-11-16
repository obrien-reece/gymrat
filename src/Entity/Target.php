<?php

namespace App\Entity;

use App\Repository\TargetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TargetRepository::class)]
class Target
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $body_part = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBodyPart(): ?string
    {
        return $this->body_part;
    }

    public function setBodyPart(string $body_part): static
    {
        $this->body_part = $body_part;

        return $this;
    }
}
