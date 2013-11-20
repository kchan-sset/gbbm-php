<?php

namespace Kenny\GbbmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Style
 *
 * @ORM\Table(name="style")
 * @ORM\Entity
 */
class Style
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     */
    protected $name;


    /**
     * @var string $beers
     *
     * @ORM\OneToMany(targetEntity="beer", mappedBy="style", cascade={"persist", "remove"})
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
