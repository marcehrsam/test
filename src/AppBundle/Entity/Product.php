<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="bez", type="string", length=255)
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
     * @return Product
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

