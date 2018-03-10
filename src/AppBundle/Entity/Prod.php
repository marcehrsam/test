<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Prod
 */
class Prod
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bez;


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
     * Set bez
     *
     * @param string $bez
     *
     * @return Prod
     */
    public function setBez($bez)
    {
        $this->bez = $bez;

        return $this;
    }

    /**
     * Get bez
     *
     * @return string
     */
    public function getBez()
    {
        return $this->bez;
    }
}

