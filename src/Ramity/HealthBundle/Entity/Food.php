<?php

namespace Ramity\HealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Food
 *
 * @ORM\Table(name="food")
 * @ORM\Entity(repositoryClass="Ramity\HealthBundle\Repository\FoodRepository")
 */
class Food
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
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="servingSize", type="string", length=255)
     */
    private $servingSize;

    /**
     * @var string
     *
     * @ORM\Column(name="servingPerContainer", type="string", length=255)
     */
    private $servingPerContainer;

    /**
     * @var int
     *
     * @ORM\Column(name="calories", type="integer")
     */
    private $calories;

    /**
     * @var int
     *
     * @ORM\Column(name="totalFat", type="integer")
     */
    private $totalFat;

    /**
     * @var int
     *
     * @ORM\Column(name="saturatedFat", type="integer")
     */
    private $saturatedFat;

    /**
     * @var int
     *
     * @ORM\Column(name="polyunsaturatedFat", type="integer")
     */
    private $polyunsaturatedFat;

    /**
     * @var int
     *
     * @ORM\Column(name="monounsaturatedFat", type="integer")
     */
    private $monounsaturatedFat;

    /**
     * @var int
     *
     * @ORM\Column(name="transFat", type="integer")
     */
    private $transFat;

    /**
     * @var int
     *
     * @ORM\Column(name="cholesterol", type="integer")
     */
    private $cholesterol;

    /**
     * @var int
     *
     * @ORM\Column(name="sodium", type="integer")
     */
    private $sodium;

    /**
     * @var int
     *
     * @ORM\Column(name="potassium", type="integer")
     */
    private $potassium;

    /**
     * @var int
     *
     * @ORM\Column(name="totalCarbs", type="integer")
     */
    private $totalCarbs;

    /**
     * @var int
     *
     * @ORM\Column(name="dietaryFiber", type="integer")
     */
    private $dietaryFiber;

    /**
     * @var int
     *
     * @ORM\Column(name="sugars", type="integer")
     */
    private $sugars;

    /**
     * @var int
     *
     * @ORM\Column(name="protein", type="integer")
     */
    private $protein;

    /**
     * @var int
     *
     * @ORM\Column(name="vitaminA", type="integer")
     */
    private $vitaminA;

    /**
     * @var int
     *
     * @ORM\Column(name="vitaminC", type="integer")
     */
    private $vitaminC;

    /**
     * @var int
     *
     * @ORM\Column(name="calcium", type="integer")
     */
    private $calcium;

    /**
     * @var int
     *
     * @ORM\Column(name="iron", type="integer")
     */
    private $iron;


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
     * @return Food
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
     * Set brand
     *
     * @param string $brand
     *
     * @return Food
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Food
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set servingSize
     *
     * @param string $servingSize
     *
     * @return Food
     */
    public function setServingSize($servingSize)
    {
        $this->servingSize = $servingSize;

        return $this;
    }

    /**
     * Get servingSize
     *
     * @return string
     */
    public function getServingSize()
    {
        return $this->servingSize;
    }

    /**
     * Set servingPerContainer
     *
     * @param string $servingPerContainer
     *
     * @return Food
     */
    public function setServingPerContainer($servingPerContainer)
    {
        $this->servingPerContainer = $servingPerContainer;

        return $this;
    }

    /**
     * Get servingPerContainer
     *
     * @return string
     */
    public function getServingPerContainer()
    {
        return $this->servingPerContainer;
    }

    /**
     * Set calories
     *
     * @param integer $calories
     *
     * @return Food
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return int
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set totalFat
     *
     * @param integer $totalFat
     *
     * @return Food
     */
    public function setTotalFat($totalFat)
    {
        $this->totalFat = $totalFat;

        return $this;
    }

    /**
     * Get totalFat
     *
     * @return int
     */
    public function getTotalFat()
    {
        return $this->totalFat;
    }

    /**
     * Set saturatedFat
     *
     * @param integer $saturatedFat
     *
     * @return Food
     */
    public function setSaturatedFat($saturatedFat)
    {
        $this->saturatedFat = $saturatedFat;

        return $this;
    }

    /**
     * Get saturatedFat
     *
     * @return int
     */
    public function getSaturatedFat()
    {
        return $this->saturatedFat;
    }

    /**
     * Set polyunsaturatedFat
     *
     * @param integer $polyunsaturatedFat
     *
     * @return Food
     */
    public function setPolyunsaturatedFat($polyunsaturatedFat)
    {
        $this->polyunsaturatedFat = $polyunsaturatedFat;

        return $this;
    }

    /**
     * Get polyunsaturatedFat
     *
     * @return int
     */
    public function getPolyunsaturatedFat()
    {
        return $this->polyunsaturatedFat;
    }

    /**
     * Set monounsaturatedFat
     *
     * @param integer $monounsaturatedFat
     *
     * @return Food
     */
    public function setMonounsaturatedFat($monounsaturatedFat)
    {
        $this->monounsaturatedFat = $monounsaturatedFat;

        return $this;
    }

    /**
     * Get monounsaturatedFat
     *
     * @return int
     */
    public function getMonounsaturatedFat()
    {
        return $this->monounsaturatedFat;
    }

    /**
     * Set transFat
     *
     * @param integer $transFat
     *
     * @return Food
     */
    public function setTransFat($transFat)
    {
        $this->transFat = $transFat;

        return $this;
    }

    /**
     * Get transFat
     *
     * @return int
     */
    public function getTransFat()
    {
        return $this->transFat;
    }

    /**
     * Set cholesterol
     *
     * @param integer $cholesterol
     *
     * @return Food
     */
    public function setCholesterol($cholesterol)
    {
        $this->cholesterol = $cholesterol;

        return $this;
    }

    /**
     * Get cholesterol
     *
     * @return int
     */
    public function getCholesterol()
    {
        return $this->cholesterol;
    }

    /**
     * Set sodium
     *
     * @param integer $sodium
     *
     * @return Food
     */
    public function setSodium($sodium)
    {
        $this->sodium = $sodium;

        return $this;
    }

    /**
     * Get sodium
     *
     * @return int
     */
    public function getSodium()
    {
        return $this->sodium;
    }

    /**
     * Set potassium
     *
     * @param integer $potassium
     *
     * @return Food
     */
    public function setPotassium($potassium)
    {
        $this->potassium = $potassium;

        return $this;
    }

    /**
     * Get potassium
     *
     * @return int
     */
    public function getPotassium()
    {
        return $this->potassium;
    }

    /**
     * Set totalCarbs
     *
     * @param integer $totalCarbs
     *
     * @return Food
     */
    public function setTotalCarbs($totalCarbs)
    {
        $this->totalCarbs = $totalCarbs;

        return $this;
    }

    /**
     * Get totalCarbs
     *
     * @return int
     */
    public function getTotalCarbs()
    {
        return $this->totalCarbs;
    }

    /**
     * Set dietaryFiber
     *
     * @param integer $dietaryFiber
     *
     * @return Food
     */
    public function setDietaryFiber($dietaryFiber)
    {
        $this->dietaryFiber = $dietaryFiber;

        return $this;
    }

    /**
     * Get dietaryFiber
     *
     * @return int
     */
    public function getDietaryFiber()
    {
        return $this->dietaryFiber;
    }

    /**
     * Set sugars
     *
     * @param integer $sugars
     *
     * @return Food
     */
    public function setSugars($sugars)
    {
        $this->sugars = $sugars;

        return $this;
    }

    /**
     * Get sugars
     *
     * @return int
     */
    public function getSugars()
    {
        return $this->sugars;
    }

    /**
     * Set protein
     *
     * @param integer $protein
     *
     * @return Food
     */
    public function setProtein($protein)
    {
        $this->protein = $protein;

        return $this;
    }

    /**
     * Get protein
     *
     * @return int
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * Set vitaminA
     *
     * @param integer $vitaminA
     *
     * @return Food
     */
    public function setVitaminA($vitaminA)
    {
        $this->vitaminA = $vitaminA;

        return $this;
    }

    /**
     * Get vitaminA
     *
     * @return int
     */
    public function getVitaminA()
    {
        return $this->vitaminA;
    }

    /**
     * Set vitaminC
     *
     * @param integer $vitaminC
     *
     * @return Food
     */
    public function setVitaminC($vitaminC)
    {
        $this->vitaminC = $vitaminC;

        return $this;
    }

    /**
     * Get vitaminC
     *
     * @return int
     */
    public function getVitaminC()
    {
        return $this->vitaminC;
    }

    /**
     * Set calcium
     *
     * @param integer $calcium
     *
     * @return Food
     */
    public function setCalcium($calcium)
    {
        $this->calcium = $calcium;

        return $this;
    }

    /**
     * Get calcium
     *
     * @return int
     */
    public function getCalcium()
    {
        return $this->calcium;
    }

    /**
     * Set iron
     *
     * @param integer $iron
     *
     * @return Food
     */
    public function setIron($iron)
    {
        $this->iron = $iron;

        return $this;
    }

    /**
     * Get iron
     *
     * @return int
     */
    public function getIron()
    {
        return $this->iron;
    }
}

