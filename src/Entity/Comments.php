<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="App\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\News", inversedBy="comments")
     * @ORM\JoinColumn(name="news_id", referencedColumnName="id")
     */
    private $news;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getNews(): ?News
    {
        return $this->news;
    }
    public function setNews(?News $news): self
    {
        $this->news = $news;
        return $this;
    }

}

