<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
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
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_update;
    
    public function __construct(){
        $this->date_update = new \DateTime();
    }
    private $id_post;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    public function getDateUpdate()
    {
        return $this->date_update->format('Y-m-d H:i:s');
    }

    public function setDateUpdate(\DateTimeInterface $date_update)
    {
        $this->date_update = $date_update;

        return $this;
    }

    public function getIdPost()
    {
        return $this->id_post;
    }

    public function setIdPost(int $id_post)
    {
        $this->id_post = $id_post;

        return $this;
    }
}
