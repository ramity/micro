<?php

namespace Ramity\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Meal
 *
 * @ORM\Table(name="meal")
 * @ORM\Entity(repositoryClass="Ramity\HealthBundle\Repository\MealRepository")
 */
class Meal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Food")
     * @ORM\JoinTable(
     *   name="meals_foods",
     *   joinColumns={@ORM\JoinColumn(name="meal_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="food_id", referencedColumnName="id", unique=true)}
     * )
     */
    private $foods;

    public function __construct()
    {
        $this->foods = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Meal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set foods
     *
     * @param ArrayCollection $foods
     *
     * @return Meal
     */
    public function setFoods($foods)
    {
        $this->foods = $foods;

        return $this;
    }

    /**
     * Get foods
     *
     * @return int
     */
    public function getFoods()
    {
        return $this->foods;
    }
}
