<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Form
 *
 * @ORM\Table(name="form")
 * @ORM\Entity
 */
class Form
{
    /**
     * @var string
     *
     * @ORM\Column(name="FormName", type="string", length=150, nullable=true)
     */
    private $formname;

    /**
     * @var string
     *
     * @ORM\Column(name="SubmitButtonName", type="string", length=150, nullable=false)
     */
    private $submitbuttonname;

    /**
     * @var string
     *
     * @ORM\Column(name="TableName", type="string", length=150, nullable=false)
     */
    private $tablename;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CodeGen\Entity\Component", mappedBy="formid")
     */
    private $componentid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->componentid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set formname
     *
     * @param string $formname
     *
     * @return Form
     */
    public function setFormname($formname)
    {
        $this->formname = $formname;

        return $this;
    }

    /**
     * Get formname
     *
     * @return string
     */
    public function getFormname()
    {
        return $this->formname;
    }

    /**
     * Set submitbuttonname
     *
     * @param string $submitbuttonname
     *
     * @return Form
     */
    public function setSubmitbuttonname($submitbuttonname)
    {
        $this->submitbuttonname = $submitbuttonname;

        return $this;
    }

    /**
     * Get submitbuttonname
     *
     * @return string
     */
    public function getSubmitbuttonname()
    {
        return $this->submitbuttonname;
    }

    /**
     * Set tablename
     *
     * @param string $tablename
     *
     * @return Form
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Add componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Form
     */
    public function addComponentid(\CodeGen\Entity\Component $componentid)
    {
        $this->componentid[] = $componentid;

        return $this;
    }

    /**
     * Remove componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     */
    public function removeComponentid(\CodeGen\Entity\Component $componentid)
    {
        $this->componentid->removeElement($componentid);
    }

    /**
     * Get componentid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComponentid()
    {
        return $this->componentid;
    }
}
