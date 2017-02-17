<?php

namespace Ramity\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MealPlan
 *
 * @ORM\Table(name="meal_plan")
 * @ORM\Entity(repositoryClass="Ramity\HealthBundle\Repository\MealPlanRepository")
 */
class MealPlan
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
     * @ORM\ManyToMany(targetEntity="Meal")
     * @ORM\JoinTable(
     *   name="mealplans_meals",
     *   joinColumns={@ORM\JoinColumn(name="mealplan_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="meal_id", referencedColumnName="id")}
     * )
     */
    private $meals;


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
     * @return MealPlan
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
     * Set meals
     *
     * @param integer $meals
     *
     * @return MealPlan
     */
    public function setMeals($meals)
    {
        $this->meals = $meals;

        return $this;
    }

    /**
     * Get meals
     *
     * @return int
     */
    public function getMeals()
    {
        return $this->meals;
    }
}
