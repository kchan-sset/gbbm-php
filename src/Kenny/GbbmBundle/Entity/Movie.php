<?php

namespace Kenny\GbbmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity
 */
class Movie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl;

    /**
     * @var string $title;
     */
    protected $title;

    /**
     * @var float $rating
     */
    protected $rating;

    /**
     * @var int $releaseYear
     */
    protected $releaseYear;

    /**
     * @var int $runTime
     */
    protected $runTime;

    /**
     * @var string $synopsis
     */
    protected $synopsis;

    /**
     * @var DateTime $createdAt
     */
    protected $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    protected $updatedAt;

    /**
     * @var string $genre
     *
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="movies", cascade={"persist"})
     * @ORM\JoinColumn(name="genre_id", referencedColumnName="id", nullable=false)
     */
    protected $genre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param float $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return int
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * @param int $releaseYear
     */
    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getRunTime()
    {
        return $this->runTime;
    }

    /**
     * @param int $runTime
     */
    public function setRunTime($runTime)
    {
        $this->runTime = $runTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * @param string $synopsis
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * @return \Kenny\GbbmBundle\Entity\DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \Kenny\GbbmBundle\Entity\DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \Kenny\GbbmBundle\Entity\DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \Kenny\GbbmBundle\Entity\DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
        return $this;
    }
}
