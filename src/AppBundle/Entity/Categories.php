<?php

namespace AppBundle\Entity;

/**
 * Categories
 */
class Categories
{
    /**
     * @var string
     */
    private $domaine;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Categories
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

