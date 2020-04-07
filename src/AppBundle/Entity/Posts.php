<?php

namespace AppBundle\Entity;

/**
 * Posts
 */
class Posts {
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $create_at = 'CURRENT_TIMESTAMP';

    /**
     * @var \AppBundle\Entity\Users
     */
    private $author;

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
     * Set title
     *
     * @param string $title
     *
     * @return Posts
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
     * Set body
     *
     * @param string $body
     *
     * @return Posts
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set create_at
     *
     * @param \DateTime $create_at
     *
     * @return Posts
     */
    public function setCreate_at($create_at)
    {
        $this->create_at = $create_at;

        return $this;
    }

    /**
     * Get create_at
     *
     * @return \DateTime
     */
    public function getCreate_at()
    {
        return $this->create_at;
    }

    /**
     * Set author
     *
     * @param \AppBundle\Entity\Users $author
     *
     * @return Posts
     */
    public function setAuthor(\AppBundle\Entity\Users $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \AppBundle\Entity\Users
     */
    public function getAuthor()
    {
        return $this->author;
    }      
    
}

