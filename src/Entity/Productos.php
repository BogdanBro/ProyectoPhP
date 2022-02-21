<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductosRepository::class)
 */
class Productos
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
    private $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $foto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $carrusel;

    /**
     * @ORM\ManyToOne(targetEntity=Categoria::class, inversedBy="productos")
     */
    private $relcion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getCarrusel(): ?string
    {
        return $this->carrusel;
    }

    public function setCarrusel(?string $carrusel): self
    {
        $this->carrusel = $carrusel;

        return $this;
    }

    public function getRelcion(): ?Categoria
    {
        return $this->relcion;
    }

    public function setRelcion(?Categoria $relcion): self
    {
        $this->relcion = $relcion;

        return $this;
    }

   
}
