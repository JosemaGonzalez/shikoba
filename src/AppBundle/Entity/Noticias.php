<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Noticias
 * @ORM\Table(name="noticias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NoticiasRepository")
 */
class Noticias
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(name="noticia_texto", type="string", length=255)
     * @var string
     */
    private $noticia_texto;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Cursos")
     * @ORM\JoinColumn(name="idCurso", referencedColumnName="id")
     */
    private $idCurso;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set noticia_texto
     *
     * @param string $noticia_texto
     *
     * @return Noticias
     */
    public function setNoticia_texto($noticia_texto)
    {
        $this->noticia_texto = $noticia_texto;

        return $this;
    }

    /**
     * Get noticia_texto
     *
     * @return string
     */
    public function getNoticia_texto()
    {
        return $this->noticia_texto;
    }

    /**
     * Set idCurso
     *
     * @param integer $idCurso
     *
     * @return Noticias
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Get idCurso
     *
     * @return int
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }
}

