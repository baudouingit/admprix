<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nomines
 *
 * @ORM\Table(name="nomines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NominesRepository")
 */
class Nomines
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
     * @ORM\Column(name="nominee", type="string", length=80, nullable=true)
     */
    private $nominee;

    /**
     * @var int
     *
     * @ORM\Column(name="domaine", type="integer")
     */
    private $domaine;

    /**
     * @var int
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var int
     *
     * @ORM\Column(name="elu", type="integer", nullable=true)
     */
    private $elu;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="longcomm", type="text")
     */
    private $longcomm;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=80)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="sid1", type="string", length=80)
     */
    private $sid1;

    /**
     * @var string
     *
     * @ORM\Column(name="nid1", type="string", length=80, nullable=true)
     */
    private $nid1;

    /**
     * @var string
     *
     * @ORM\Column(name="sid2", type="string", length=80, nullable=true)
     */
    private $sid2;

    /**
     * @var string
     *
     * @ORM\Column(name="nid2", type="string", length=80, nullable=true)
     */
    private $nid2;

    /**
     * @var string
     *
     * @ORM\Column(name="sid3", type="string", length=80, nullable=true)
     */
    private $sid3;

    /**
     * @var string
     *
     * @ORM\Column(name="nid3", type="string", length=80, nullable=true)
     */
    private $nid3;


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
     * Set nominee
     *
     * @param string $nominee
     *
     * @return Nomines
     */
    public function setNominee($nominee)
    {
        $this->nominee = $nominee;

        return $this;
    }

    /**
     * Get nominee
     *
     * @return string
     */
    public function getNominee()
    {
        return $this->nominee;
    }

    /**
     * Set domaine
     *
     * @param integer $domaine
     *
     * @return Nomines
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return int
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Nomines
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return int
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set elu
     *
     * @param integer $elu
     *
     * @return Nomines
     */
    public function setElu($elu)
    {
        $this->elu = $elu;

        return $this;
    }

    /**
     * Get elu
     *
     * @return int
     */
    public function getElu()
    {
        return $this->elu;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Nomines
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set longcomm
     *
     * @param string $longcomm
     *
     * @return Nomines
     */
    public function setLongcomm($longcomm)
    {
        $this->longcomm = $longcomm;

        return $this;
    }

    /**
     * Get longcomm
     *
     * @return string
     */
    public function getLongcomm()
    {
        return $this->longcomm;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Nomines
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set sid1
     *
     * @param string $sid1
     *
     * @return Nomines
     */
    public function setSid1($sid1)
    {
        $this->sid1 = $sid1;

        return $this;
    }

    /**
     * Get sid1
     *
     * @return string
     */
    public function getSid1()
    {
        return $this->sid1;
    }

    /**
     * Set nid1
     *
     * @param string $nid1
     *
     * @return Nomines
     */
    public function setNid1($nid1)
    {
        $this->nid1 = $nid1;

        return $this;
    }

    /**
     * Get nid1
     *
     * @return string
     */
    public function getNid1()
    {
        return $this->nid1;
    }

    /**
     * Set sid2
     *
     * @param string $sid2
     *
     * @return Nomines
     */
    public function setSid2($sid2)
    {
        $this->sid2 = $sid2;

        return $this;
    }

    /**
     * Get sid2
     *
     * @return string
     */
    public function getSid2()
    {
        return $this->sid2;
    }

    /**
     * Set nid2
     *
     * @param string $nid2
     *
     * @return Nomines
     */
    public function setNid2($nid2)
    {
        $this->nid2 = $nid2;

        return $this;
    }

    /**
     * Get nid2
     *
     * @return string
     */
    public function getNid2()
    {
        return $this->nid2;
    }

    /**
     * Set sid3
     *
     * @param string $sid3
     *
     * @return Nomines
     */
    public function setSid3($sid3)
    {
        $this->sid3 = $sid3;

        return $this;
    }

    /**
     * Get sid3
     *
     * @return string
     */
    public function getSid3()
    {
        return $this->sid3;
    }

    /**
     * Set nid3
     *
     * @param string $nid3
     *
     * @return Nomines
     */
    public function setNid3($nid3)
    {
        $this->nid3 = $nid3;

        return $this;
    }

    /**
     * Get nid3
     *
     * @return string
     */
    public function getNid3()
    {
        return $this->nid3;
    }
}
