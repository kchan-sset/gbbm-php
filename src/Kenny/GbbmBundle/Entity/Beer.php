<?php

namespace Kenny\GbbmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beer
 *
 * @ORM\Table(name="beer")
 * @ORM\Entity
 */
class Beer
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
     * @var string $label
     *
     */
    protected $label;

    /**
     * @var string $style
     *
     * @ORM\ManyToOne(targetEntity="Style", inversedBy="beers", cascade={"persist"})
     * @ORM\JoinColumn(name="style_id", referencedColumnName="id", nullable=false)
     */
    protected $style;

    /**
     * @var string $brewery
     *
     * @ORM\ManyToOne(targetEntity="Brewery", inversedBy="beers", cascade={"persist"})
     * @ORM\JoinColumn(name="brewery_id", referencedColumnName="id", nullable=false)
     */
    protected $brewery;

    /**
     * @var string notes
     */
    protected $notes;


    /**
     * @var DateTime $createdAt
     *
     */
    protected $createdAt;

    /**
     * @var DateTime $updatedAt
     *
     */
    protected $updatedAt;

    /**
     * @var string $imageUrl
     *
     */
    protected $imageUrl;


    /**
     * @var float $rating
     */
    protected $rating;





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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrewery()
    {
        return $this->brewery;
    }

    /**
     * @param string $brewery
     */
    public function setBrewery($brewery)
    {
        $this->brewery = $brewery;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
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
}
