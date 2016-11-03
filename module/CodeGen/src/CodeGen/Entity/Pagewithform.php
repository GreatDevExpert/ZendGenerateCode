<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagewithform
 *
 * @ORM\Table(name="pagewithform")
 * @ORM\Entity
 */
class Pagewithform
{
    /**
     * @var string
     *
     * @ORM\Column(name="OperationType", type="string", nullable=true)
     */
    private $operationtype;

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
     * Set operationtype
     *
     * @param string $operationtype
     *
     * @return Pagewithform
     */
    public function setOperationtype($operationtype)
    {
        $this->operationtype = $operationtype;

        return $this;
    }

    /**
     * Get operationtype
     *
     * @return string
     */
    public function getOperationtype()
    {
        return $this->operationtype;
    }

    /**
     * Set componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Pagewithform
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
