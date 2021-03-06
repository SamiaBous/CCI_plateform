<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Table(name="questionnaire")
 * @ORM\Entity(repositoryClass="App\Repository\QuestionnaireRepository")
 */
class Questionnaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="date", type="datetime",  nullable=true)
     */
    private $date;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="sexe", type="string", length=25, nullable=true)
     */
    private $civilite;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="site", type="string", length=25, nullable=true)
     */
    private $factSite;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="nom", type="string", length=25, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="prenom", type="string", length=25, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="telephone", type="string", length=16, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="adresse", type="string", length=150, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="code_postal", type="string", length=255, nullable=true)
     */
    public $codePostal;

    /**
     * @var string|null
     * 
     * @Assert\NotBlank()
     * @ORM\Column(name="commune", type="string", length=255, nullable=true)
     */
    public $commune;


    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="email", type="string", length=25, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="question_1", type="string", length=255, nullable=true)
     */
    private $quest1;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="question_2", type="string", length=255, nullable=true)
     */
    private $quest2;

     /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="service", type="string", length=255, nullable=true)
     */
    private $service;

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="question_3", type="string", length=255, nullable=true)
     */
    private $quest3;

   

    /**
     * @var string|null
     *
     * @Assert\NotBlank()
     * @ORM\Column(name="question_4", type="string", length=255, nullable=true)
     */
    private $quest4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $comment;

   

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * @param string|null $civilite
     *
     * @return self
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFactSite()
    {
        return $this->factSite;
    }

    /**
     * @param string|null $factSite
     *
     * @return self
     */
    public function setFactSite($factSite)
    {
        $this->factSite = $factSite;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    

    /**
     * @return string|null
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuest1()
    {
        return $this->quest1;
    }

    /**
     * @param string|null $quest1
     *
     * @return self
     */
    public function setQuest1($quest1)
    {
        $this->quest1 = $quest1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuest2()
    {
        return $this->quest2;
    }

    /**
     * @param string|null $quest2
     *
     * @return self
     */
    public function setQuest2($quest2)
    {
        $this->quest2 = $quest2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuest3()
    {
        return $this->quest3;
    }

    /**
     * @param string|null $quest3
     *
     * @return self
     */
    public function setQuest3($quest3)
    {
        $this->quest3 = $quest3;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuest4()
    {
        return $this->quest4;
    }

    /**
     * @param string|null $quest4
     *
     * @return self
     */
    public function setQuest4($quest4)
    {
        $this->quest4 = $quest4;

        return $this;
    }

    
    /**
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    

    

    /**
     * @return string|null
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param string|null $codePostal
     *
     * @return self
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    

    /**
     * @return string|null
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * @param string|null $commune
     *
     * @return self
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    
    

    /**
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string|null $service
     *
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string|null $date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function __construct()
    {
        $this->date = new \DateTime('now');
    }
}

