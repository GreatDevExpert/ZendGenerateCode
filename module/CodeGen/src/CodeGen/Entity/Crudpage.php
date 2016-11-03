<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crudpage
 *
 * @ORM\Table(name="crudpage")
 * @ORM\Entity
 */
class Crudpage
{
    /**
     * @var string
     *
     * @ORM\Column(name="ModuleName", type="string", length=150, nullable=false)
     */
    private $modulename;

    /**
     * @var string
     *
     * @ORM\Column(name="ControllerName", type="string", length=150, nullable=false)
     */
    private $controllername;

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
     * Set modulename
     *
     * @param string $modulename
     *
     * @return Crudpage
     */
    public function setModulename($modulename)
    {
        $this->modulename = $modulename;

        return $this;
    }

    /**
     * Get modulename
     *
     * @return string
     */
    public function getModulename()
    {
        return $this->modulename;
    }

    /**
     * Set controllername
     *
     * @param string $controllername
     *
     * @return Crudpage
     */
    public function setControllername($controllername)
    {
        $this->controllername = $controllername;

        return $this;
    }

    /**
     * Get controllername
     *
     * @return string
     */
    public function getControllername()
    {
        return $this->controllername;
    }

    /**
     * Set componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Crudpage
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
