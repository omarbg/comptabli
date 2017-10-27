<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MissionColaborator
 *
 * @ORM\Table(name="mission_colaborator", indexes={@ORM\Index(name="id_mission", columns={"id_mission"}), @ORM\Index(name="id_colaborator", columns={"id_colaborator"})})
 * @ORM\Entity
 */
class MissionColaborator
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \ApiBundle\Entity\Missions
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Missions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mission", referencedColumnName="id")
     * })
     */
    private $idMission;

    /**
     * @var \ApiBundle\Entity\Colaborators
     *
     * @ORM\ManyToOne(targetEntity="ApiBundle\Entity\Colaborators")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_colaborator", referencedColumnName="id")
     * })
     */
    private $idColaborator;


}

