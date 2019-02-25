<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\EventRepository")
 */
class Event
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
     *@ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="idorganisateur", referencedColumnName="id")
     */

    private $idorganisateur;

    /**
     *@ORM\ManyToOne(targetEntity="EventBundle\Entity\eventtype")
     * @ORM\JoinColumn(name="eventtype", referencedColumnName="id")
     */

    private $eventtype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535)
     */


    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="codepostal", type="integer")
     */
    private $codepostal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="free", type="boolean")
     */
    private $free;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */


    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     */


    private $capacity;

    /**
     * @var int
     *
     * @ORM\Column(name="reserved", type="integer")
     */
    private $reserved;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     * @var \Time
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="numberofdays", type="integer")
     */
    private $numberofdays;


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
     * @return Event
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
     * Set description
     *
     * @param string $description
     *
     * @return Event
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
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Event
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set reserved
     *
     * @param integer $reserved
     *
     * @return Event
     */
    public function setReserved($reserved)
    {
        $this->reserved = $reserved;

        return $this;
    }

    /**
     * Get reserved
     *
     * @return int
     */
    public function getReserved()
    {
        return $this->reserved;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set numberofdays
     *
     * @param integer $numberofdays
     *
     * @return Event
     */
    public function setNumberofdays($numberofdays)
    {
        $this->numberofdays = $numberofdays;

        return $this;
    }

    /**
     * Get numberofdays
     *
     * @return int
     */
    public function getNumberofdays()
    {
        return $this->numberofdays;
    }

    /**
     * Set idorganisateur
     *
     * @param \UserBundle\Entity\User $idorganisateur
     *
     * @return Event
     */
    public function setIdorganisateur(\UserBundle\Entity\User $idorganisateur = null)
    {
        $this->idorganisateur = $idorganisateur;

        return $this;
    }

    /**
     * Get idorganisateur
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdorganisateur()
    {
        return $this->idorganisateur;
    }

    /**
     * Set eventtype
     *
     * @param \EventBundle\Entity\eventtype $eventtype
     *
     * @return Event
     */
    public function setEventtype(\EventBundle\Entity\eventtype $eventtype = null)
    {
        $this->eventtype = $eventtype;

        return $this;
    }

    /**
     * Get eventtype
     *
     * @return \EventBundle\Entity\eventtype
     */
    public function getEventtype()
    {
        return $this->eventtype;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Event
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Event
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Event
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Event
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     *
     * @return Event
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set free
     *
     * @param boolean $free
     *
     * @return Event
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get free
     *
     * @return boolean
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Event
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
