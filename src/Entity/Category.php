<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * 
     * @var int
     * 
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * 
     * @var string
     * 
     * @ORM\Column(type="string", length=155)
     * 
     */
    private $title;

    /**
     * One news has many category
     * @OneToMany(targetEntity="App\Entity\News", mappedBy="categories")
     */
    private $news;

    public function __construct() {
        $this->news = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle(?string $title):void {
        $this->title = $title;
    }

    public function getNews(): Collection
    {
        return $this->news;
    }

    /**
     * Add news
     *
     * @param News $news
     * @return Category
     */
    public function addNews(News $news): self
    {
        if(!$this->news->contains($news)){
            $this->news[] = $news;
            $news->setCategories($this);
        }

        return $this;
    }

    /**
     * Remove news
     *
     * @param News $news
     */
    public function removeNews(News $news)
    {
        if ($this->news->contains($news)) {
            $this->news->removeElement($news);
            if ($news->getCategories() === $this) {
                $news->setCategories(null);
            }
        }
    }

    public function __toString()
    {
        return $this->title;
    }


}
