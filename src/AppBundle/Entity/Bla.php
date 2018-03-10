<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bla
 *
 * @ORM\Table(name="bla")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BlaRepository")
 */
class Bla
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
     * @ORM\Column(name="test1", type="string", length=255)
     */
    private $test1;

    /**
     * @var string
     *
     * @ORM\Column(name="test2", type="string", length=255)
     */
    private $test2;

    /**
     * @var int
     *
     * @ORM\Column(name="test3", type="integer")
     */
    private $test3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="test4", type="datetime")
     */
    private $test4;


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
     * Set test1
     *
     * @param string $test1
     *
     * @return Bla
     */
    public function setTest1($test1)
    {
        $this->test1 = $test1;

        return $this;
    }

    /**
     * Get test1
     *
     * @return string
     */
    public function getTest1()
    {
        return $this->test1;
    }

    /**
     * Set test2
     *
     * @param string $test2
     *
     * @return Bla
     */
    public function setTest2($test2)
    {
        $this->test2 = $test2;

        return $this;
    }

    /**
     * Get test2
     *
     * @return string
     */
    public function getTest2()
    {
        return $this->test2;
    }

    /**
     * Set test3
     *
     * @param integer $test3
     *
     * @return Bla
     */
    public function setTest3($test3)
    {
        $this->test3 = $test3;

        return $this;
    }

    /**
     * Get test3
     *
     * @return int
     */
    public function getTest3()
    {
        return $this->test3;
    }

    /**
     * Set test4
     *
     * @param \DateTime $test4
     *
     * @return Bla
     */
    public function setTest4($test4)
    {
        $this->test4 = $test4;

        return $this;
    }

    /**
     * Get test4
     *
     * @return \DateTime
     */
    public function getTest4()
    {
        return $this->test4;
    }
}

