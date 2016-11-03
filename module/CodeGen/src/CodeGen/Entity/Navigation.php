<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Navigation
 *
 * @ORM\Table(name="navigation")
 * @ORM\Entity
 */
class Navigation
{
    /**
     * @var string
     *
     * @ORM\Column(name="Key", type="string", length=150, nullable=false)
     */
    private $key;

    /**
     * @var \CodeGen\Entity\Component
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="CodeGen\Entity\Component")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ComponentId", referencedColumnName="ComponentId")
     * })
     */
    private $componentid;



    /**
     * Set key
     *
     * @param string $key
     *
     * @return Navigation
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Navigation
     */
    public function setComponentid(\CodeGen\Entity\Component $componentid)
    {
        $this->componentid = $componentid;

        return $this;
    }

    /**
     * Get componentid
     *
     * @return \CodeGen\Entity\Component
     */
    public function getComponentid()
    {
        return $this->componentid;
    }
}
