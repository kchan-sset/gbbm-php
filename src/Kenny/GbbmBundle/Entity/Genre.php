<?php

namespace Kenny\GbbmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Kenny\GbbmBundle\Entity\Movie;

/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity
 */
class Genre
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
     * @var string $name
     */
    protected $name;

    /**
     * @var string $movies
     *
     * @ORM\OneToMany(targetEntity="Movie", mappedBy="genre", cascade={"persist", "remove"})
     */
    protected $movies;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movies = new ArrayCollection();
    }


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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getMovies()
    {
        return $this->movies;

    }

    public function addMovie(Movie $movie)
    {
        $this->movies[] = $movie;
    }

    public function removeMovie(Movie $movie)
    {
        $this->movies->removeElement($movie);
    }
}
