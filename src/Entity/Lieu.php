<?php

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LieuRepository::class)
 */
class Lieu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Non;

    /**
     * @ORM\ManyToOne(targetEntity=Events::class, inversedBy="Lieu")
     * @ORM\JoinColumn(nullable=false)
     */
    private $events;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNon(): ?string
    {
        return $this->Non;
    }

    public function setNon(string $Non): self
    {
        $this->Non = $Non;

        return $this;
    }

    public function getEvents(): ?Events
    {
        return $this->events;
    }

    public function setEvents(?Events $events): self
    {
        $this->events = $events;

        return $this;
    }
}
