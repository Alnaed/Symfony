<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PokemonRepository")
 */
class Pokemon extends MastaClass
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Type;

    /**
     * @ORM\Column(type="integer")
     */
    private $Hitpoint;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Attacc")
     */
    private $Attacc;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PokemonTeam", inversedBy="Pokemon")
     */
    private $pokemonTeam;

    public function __construct()
    {
        parent::__construct();  
        $this->Attacc = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->Type;
    }

    public function setType(int $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getHitpoint(): ?int
    {
        return $this->Hitpoint;
    }

    public function setHitpoint(int $Hitpoint): self
    {
        $this->Hitpoint = $Hitpoint;

        return $this;
    }

    /**
     * @return Collection|Attacc[]
     */
    public function getAttacc(): Collection
    {
        return $this->Attacc;
    }

    public function addAttacc(Attacc $attacc): self
    {
        if (!$this->Attacc->contains($attacc)) {
            $this->Attacc[] = $attacc;
        }

        return $this;
    }

    public function removeAttacc(Attacc $attacc): self
    {
        if ($this->Attacc->contains($attacc)) {
            $this->Attacc->removeElement($attacc);
        }

        return $this;
    }

    public function getPokemonTeam(): ?PokemonTeam
    {
        return $this->pokemonTeam;
    }

    public function setPokemonTeam(?PokemonTeam $pokemonTeam): self
    {
        $this->pokemonTeam = $pokemonTeam;

        return $this;
    }
}
