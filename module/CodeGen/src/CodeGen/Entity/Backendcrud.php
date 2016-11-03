<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backendcrud
 *
 * @ORM\Table(name="backendcrud")
 * @ORM\Entity
 */
class Backendcrud
{
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
     * Set componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Backendcrud
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
