<?php

namespace ApiBundle\Entity;

/**
 * AuthCode
 */
class AuthCode
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ApiBundle\Entity\Client
     */
    private $client;

    /**
     * @var \ApiBundle\Entity\User
     */
    private $user;


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
     * Set client
     *
     * @param \ApiBundle\Entity\Client $client
     *
     * @return AuthCode
     */
    public function setClient(\ApiBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \ApiBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set user
     *
     * @param \ApiBundle\Entity\User $user
     *
     * @return AuthCode
     */
    public function setUser(\ApiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ApiBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

