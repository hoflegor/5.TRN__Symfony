<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
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
     * @ORM\Column(name="nick", type="string", length=255)
     */
    private $nick;

    /**
    * @ORM\OneToMany(targetEntity="Tweet", mappedBy="user")
    * 
    */
    private $tweet;


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
     * Set nick
     *
     * @param string $nick
     * @return User
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tweet = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tweet
     *
     * @param \AppBundle\Entity\Tweet $tweet
     * @return User
     */
    public function addTweet(\AppBundle\Entity\Tweet $tweet)
    {
        $this->tweet[] = $tweet;

        return $this;
    }

    /**
     * Remove tweet
     *
     * @param \AppBundle\Entity\Tweet $tweet
     */
    public function removeTweet(\AppBundle\Entity\Tweet $tweet)
    {
        $this->tweet->removeElement($tweet);
    }

    /**
     * Get tweet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTweet()
    {
        return $this->tweet;
    }
}
