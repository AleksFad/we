<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="App\Repository\NewsRepository")
 */
class News extends EntityRepository
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
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * 
     * @var string
     * 
     * @ORM\Column(type="text", length=3000)
     */
    private $content;

    /**
     * 
     * @var \DateTime
     * 
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $date;

    /**
     * Many category have one news
     * @ManyToOne(targetEntity="App\Entity\Category", inversedBy="news", cascade={"persist"})
     * @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comments", mappedBy="news")
     */
    private $comments;

    /**
     * @ORM\Column(type="string")
     */
    private $image;


    public function __construct(){
        $this->date = new \DateTime();
        $this->comments = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle() {
		return $this->title;
	}

	public function setTitle(?string $title): void {
		$this->title = $title;
    }
    
    public function getDescription() {
		return $this->description;
	}

	public function setDescription(?string $description): void {
		$this->description = $description;
    }
    
    public function getContent() {
		return $this->content;
	}

	public function setContent(?string $content): void {
		$this->content = $content;
    }

    public function getCategories(): ?Category
    {
        return $this->categories;
    }

    public function setCategories(?Category $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return Collection|Comments[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }
    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setNews($this);
        }
        return $this;
    }
    public function removeComment(Comments $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            if ($comment->getNews() === $this) {
                $comment->setNews(null);
            }
        }
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * Define last 3 news query
     */
    public function findAll()
    {
        return $this->findBy(array(), array('date' => 'DESC', 'LIMIT' => '3'));
    }

}