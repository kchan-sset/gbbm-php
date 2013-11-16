<?php

namespace Kenny\GbbmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Kenny\GbbmBundle\Entity\Beer;

/**
 * Brewery
 *
 * @ORM\Table(name="brewery")
 * @ORM\Entity
 */
class Brewery
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
     * @var string $country
     */
    protected $country;

    /**
     * @var string $beers
     *
     * @ORM\OneToMany(targetEntity="beer", mappedBy="brewery", cascade={"persist", "remove"})
     */
    protected $beers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->beers = new ArrayCollection();
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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function addBeer(Beer $beer)
    {
        $this->beers[] = $beer;
        return $this;
    }

    public function removeBeer(Beer $beer)
    {
        $this->beers->removeElement($beer);
    }

    public function getBeers()
    {
        return $this->beers;
    }
}
