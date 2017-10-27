<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colaborators
 *
 * @ORM\Table(name="colaborators", indexes={@ORM\Index(name="cabinet", columns={"cabinet"})})
 * @ORM\Entity
 */
class Colaborators
{
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=256, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=256, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=256, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=256, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="lastlogin", type="string", length=256, nullable=false)
     */
    private $lastlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="hire_date", type="string", length=256, nullable=false)
     */
    private $hireDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \ApiBundle\Entity\Cabinet
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Cabinet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cabinet", referencedColumnName="id")
     * })
     */
    private $cabinet;


}

