<?php

namespace Ramity\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Ramity\AuthBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=255)
     */
    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="created", type="string", length=255)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="lastActive", type="string", length=255)
     */
    private $lastActive;

    /**
     * @var string
     *
     * @ORM\Column(name="timeZone", type="string", length=255)
     */
    private $timeZone;

    /**
     * @var string
     *
     * @ORM\Column(name="coverUrl", type="string", length=255)
     */
    private $coverUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="profileUrl", type="string", length=255)
     */
    private $profileUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="string", length=255)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="hubPrivacy", type="string", length=255)
     */
    private $hubPrivacy;

    /**
     * @var string
     *
     * @ORM\Column(name="healthPrivacy", type="string", length=255)
     */
    private $healthPrivacy;

    /**
     * @var string
     *
     * @ORM\Column(name="closetPrivacy", type="string", length=255)
     */
    private $closetPrivacy;

    /**
     * @var string
     *
     * @ORM\Column(name="plannerPrivacy", type="string", length=255)
     */
    private $plannerPrivacy;

    /**
     * @var int
     *
     * @ORM\Column(name="loginAttempts", type="integer")
     */
    private $loginAttempts;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return User
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return User
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastActive
     *
     * @param string $lastActive
     *
     * @return User
     */
    public function setLastActive($lastActive)
    {
        $this->lastActive = $lastActive;

        return $this;
    }

    /**
     * Get lastActive
     *
     * @return string
     */
    public function getLastActive()
    {
        return $this->lastActive;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return User
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set coverUrl
     *
     * @param string $coverUrl
     *
     * @return User
     */
    public function setCoverUrl($coverUrl)
    {
        $this->coverUrl = $coverUrl;

        return $this;
    }

    /**
     * Get coverUrl
     *
     * @return string
     */
    public function getCoverUrl()
    {
        return $this->coverUrl;
    }

    /**
     * Set profileUrl
     *
     * @param string $profileUrl
     *
     * @return User
     */
    public function setProfileUrl($profileUrl)
    {
        $this->profileUrl = $profileUrl;

        return $this;
    }

    /**
     * Get profileUrl
     *
     * @return string
     */
    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return User
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set hubPrivacy
     *
     * @param string $hubPrivacy
     *
     * @return User
     */
    public function setHubPrivacy($hubPrivacy)
    {
        $this->hubPrivacy = $hubPrivacy;

        return $this;
    }

    /**
     * Get hubPrivacy
     *
     * @return string
     */
    public function getHubPrivacy()
    {
        return $this->hubPrivacy;
    }

    /**
     * Set healthPrivacy
     *
     * @param string $healthPrivacy
     *
     * @return User
     */
    public function setHealthPrivacy($healthPrivacy)
    {
        $this->healthPrivacy = $healthPrivacy;

        return $this;
    }

    /**
     * Get healthPrivacy
     *
     * @return string
     */
    public function getHealthPrivacy()
    {
        return $this->healthPrivacy;
    }

    /**
     * Set closetPrivacy
     *
     * @param string $closetPrivacy
     *
     * @return User
     */
    public function setClosetPrivacy($closetPrivacy)
    {
        $this->closetPrivacy = $closetPrivacy;

        return $this;
    }

    /**
     * Get closetPrivacy
     *
     * @return string
     */
    public function getClosetPrivacy()
    {
        return $this->closetPrivacy;
    }

    /**
     * Set plannerPrivacy
     *
     * @param string $plannerPrivacy
     *
     * @return User
     */
    public function setPlannerPrivacy($plannerPrivacy)
    {
        $this->plannerPrivacy = $plannerPrivacy;

        return $this;
    }

    /**
     * Get plannerPrivacy
     *
     * @return string
     */
    public function getPlannerPrivacy()
    {
        return $this->plannerPrivacy;
    }

    /**
     * Set loginAttempts
     *
     * @param integer $loginAttempts
     *
     * @return User
     */
    public function setLoginAttempts($loginAttempts)
    {
        $this->loginAttempts = $loginAttempts;

        return $this;
    }

    /**
     * Get loginAttempts
     *
     * @return int
     */
    public function getLoginAttempts()
    {
        return $this->loginAttempts;
    }
}

