<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formfield
 *
 * @ORM\Table(name="formfield", indexes={@ORM\Index(name="fk_Form_FormField", columns={"FormId"})})
 * @ORM\Entity
 */
class Formfield
{
    /**
     * @var integer
     *
     * @ORM\Column(name="FormFieldId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $formfieldid;

    /**
     * @var string
     *
     * @ORM\Column(name="FieldLabel", type="string", length=150, nullable=false)
     */
    private $fieldlabel;

    /**
     * @var string
     *
     * @ORM\Column(name="FieldType", type="string", length=150, nullable=false)
     */
    private $fieldtype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FieldIsRequired", type="boolean", nullable=false)
     */
    private $fieldisrequired = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BoundFieldName", type="string", length=150, nullable=true)
     */
    private $boundfieldname;

    /**
     * @var \CodeGen\Entity\Form
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Form")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FormId", referencedColumnName="ComponentId")
     * })
     */
    private $formid;



    /**
     * Get formfieldid
     *
     * @return integer
     */
    public function getFormfieldid()
    {
        return $this->formfieldid;
    }

    /**
     * Set fieldlabel
     *
     * @param string $fieldlabel
     *
     * @return Formfield
     */
    public function setFieldlabel($fieldlabel)
    {
        $this->fieldlabel = $fieldlabel;

        return $this;
    }

    /**
     * Get fieldlabel
     *
     * @return string
     */
    public function getFieldlabel()
    {
        return $this->fieldlabel;
    }

    /**
     * Set fieldtype
     *
     * @param string $fieldtype
     *
     * @return Formfield
     */
    public function setFieldtype($fieldtype)
    {
        $this->fieldtype = $fieldtype;

        return $this;
    }

    /**
     * Get fieldtype
     *
     * @return string
     */
    public function getFieldtype()
    {
        return $this->fieldtype;
    }

    /**
     * Set fieldisrequired
     *
     * @param boolean $fieldisrequired
     *
     * @return Formfield
     */
    public function setFieldisrequired($fieldisrequired)
    {
        $this->fieldisrequired = $fieldisrequired;

        return $this;
    }

    /**
     * Get fieldisrequired
     *
     * @return boolean
     */
    public function getFieldisrequired()
    {
        return $this->fieldisrequired;
    }

    /**
     * Set boundfieldname
     *
     * @param string $boundfieldname
     *
     * @return Formfield
     */
    public function setBoundfieldname($boundfieldname)
    {
        $this->boundfieldname = $boundfieldname;

        return $this;
    }

    /**
     * Get boundfieldname
     *
     * @return string
     */
    public function getBoundfieldname()
    {
        return $this->boundfieldname;
    }

    /**
     * Set formid
     *
     * @param \CodeGen\Entity\Form $formid
     *
     * @return Formfield
     */
    public function setFormid(\CodeGen\Entity\Form $formid = null)
    {
        $this->formid = $formid;

        return $this;
    }

    /**
     * Get formid
     *
     * @return \CodeGen\Entity\Form
     */
    public function getFormid()
    {
        return $this->formid;
    }
}
