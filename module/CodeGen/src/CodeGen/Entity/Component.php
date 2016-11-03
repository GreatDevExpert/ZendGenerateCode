<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Component
 *
 * @ORM\Table(name="component", indexes={@ORM\Index(name="fk_Application_Component", columns={"ApplicationId"})})
 * @ORM\Entity
 */
class Component
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ComponentId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $componentid;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ComponentType", type="string", nullable=false)
     */
    private $componenttype;

    /**
     * @var \CodeGen\Entity\Application
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Application")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ApplicationId", referencedColumnName="ApplicationId")
     * })
     */
    private $applicationid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CodeGen\Entity\Form", inversedBy="componentid")
     * @ORM\JoinTable(name="formbasedpage",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ComponentId", referencedColumnName="ComponentId")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="FormId", referencedColumnName="ComponentId")
     *   }
     * )
     */
    private $formid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get componentid
     *
     * @return integer
     */
    public function getComponentid()
    {
        return $this->componentid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Component
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
     * Set componenttype
     *
     * @param string $componenttype
     *
     * @return Component
     */
    public function setComponenttype($componenttype)
    {
        $this->componenttype = $componenttype;

        return $this;
    }

    /**
     * Get componenttype
     *
     * @return string
     */
    public function getComponenttype()
    {
        return $this->componenttype;
    }

    /**
     * Set applicationid
     *
     * @param \CodeGen\Entity\Application $applicationid
     *
     * @return Component
     */
    public function setApplicationid(\CodeGen\Entity\Application $applicationid = null)
    {
        $this->applicationid = $applicationid;

        return $this;
    }

    /**
     * Get applicationid
     *
     * @return \CodeGen\Entity\Application
     */
    public function getApplicationid()
    {
        return $this->applicationid;
    }

    /**
     * Add formid
     *
     * @param \CodeGen\Entity\Form $formid
     *
     * @return Component
     */
    public function addFormid(\CodeGen\Entity\Form $formid)
    {
        $this->formid[] = $formid;

        return $this;
    }

    /**
     * Remove formid
     *
     * @param \CodeGen\Entity\Form $formid
     */
    public function removeFormid(\CodeGen\Entity\Form $formid)
    {
        $this->formid->removeElement($formid);
    }

    /**
     * Get formid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormid()
    {
        return $this->formid;
    }
}
