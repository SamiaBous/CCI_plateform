<?php

namespace App\Entity;

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="epci")
 * @ORM\Entity(repositoryClass="App\Repository\EpciRepository")
 */
class AutoCompletionCPVille
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="code_postal", type="string", length=255, nullable=true)
     */
    public $CodePostal;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="commune", type="string", length=255, nullable=true)
     */
    public $Ville;
}