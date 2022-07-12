<?php

namespace App\Entity;

use App\Repository\ProduktDoUtylizacjiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduktDoUtylizacjiRepository::class)]
class ProduktDoUtylizacji
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nazwa;

    #[ORM\Column(type: 'string', length: 255)]
    private $numerSeryjny;

    #[ORM\Column(type: 'date')]
    private $dataProdukcji;

    #[ORM\Column(type: 'datetime')]
    private $PlanowanaDataUtylizacji;

    #[ORM\Column(type: 'boolean')]
    private $CzyZostaloZutylizowane;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getNumerSeryjny(): ?string
    {
        return $this->numerSeryjny;
    }

    public function setNumerSeryjny(string $numerSeryjny): self
    {
        $this->numerSeryjny = $numerSeryjny;

        return $this;
    }

    public function getDataProdukcji(): ?\DateTimeInterface
    {
        return $this->dataProdukcji;
    }

    public function setDataProdukcji(\DateTimeInterface $dataProdukcji): self
    {
        $this->dataProdukcji = $dataProdukcji;

        return $this;
    }

    public function getPlanowanaDataUtylizacji(): ?\DateTimeInterface
    {
        return $this->PlanowanaDataUtylizacji;
    }

    public function setPlanowanaDataUtylizacji(\DateTimeInterface $PlanowanaDataUtylizacji): self
    {
        $this->PlanowanaDataUtylizacji = $PlanowanaDataUtylizacji;

        return $this;
    }

    public function isCzyZostaloZutylizowane(): ?bool
    {
        return $this->CzyZostaloZutylizowane;
    }

    public function setCzyZostaloZutylizowane(bool $CzyZostaloZutylizowane): self
    {
        $this->CzyZostaloZutylizowane = $CzyZostaloZutylizowane;

        return $this;
    }
}
