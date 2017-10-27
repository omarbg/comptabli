<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taches
 *
 * @ORM\Table(name="taches", indexes={@ORM\Index(name="id_mission_colab", columns={"id_mission_colab"})})
 * @ORM\Entity
 */
class Taches
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=256, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="begindate", type="string", length=256, nullable=false)
     */
    private $begindate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \ApiBundle\Entity\MissionColaborator
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\MissionColaborator")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mission_colab", referencedColumnName="id")
     * })
     */
    private $idMissionColab;


}

