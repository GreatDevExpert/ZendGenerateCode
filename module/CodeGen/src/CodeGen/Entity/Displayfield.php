<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Displayfield
 *
 * @ORM\Table(name="displayfield", indexes={@ORM\Index(name="pk_CrudPage_DisplayField", columns={"CrudPageId"})})
 * @ORM\Entity
 */
class Displayfield
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DisplayFieldId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $displayfieldid;

    /**
     * @var string
     *
     * @ORM\Column(name="FieldName", type="string", length=150, nullable=false)
     */
    private $fieldname;

    /**
     * @var string
     *
     * @ORM\Column(name="FieldType", type="string", length=150, nullable=false)
     */
    private $fieldtype;

    /**
     * @var string
     *
     * @ORM\Column(name="Label", type="string", length=150, nullable=false)
     */
    private $label;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsForeign", type="boolean", nullable=false)
     */
    private $isforeign = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ForeignTable", type="string", length=150, nullable=true)
     */
    private $foreigntable;

    /**
     * @var string
     *
     * @ORM\Column(name="ForeignField", type="string", length=150, nullable=true)
     */
    private $foreignfield;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsAutoIncrement", type="boolean", nullable=false)
     */
    private $isautoincrement = '0';

    /**
     * @var \CodeGen\Entity\Crudpage
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Crudpage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CrudPageId", referencedColumnName="ComponentId")
     * })
     */
    private $crudpageid;



    /**
     * Get displayfieldid
     *
     * @return integer
     */
    public function getDisplayfieldid()
    {
        return $this->displayfieldid;
    }

    /**
     * Set fieldname
     *
     * @param string $fieldname
     *
     * @return Displayfield
     */
    public function setFieldname($fieldname)
    {
        $this->fieldname = $fieldname;

        return $this;
    }

    /**
     * Get fieldname
     *
     * @return string
     */
    public function getFieldname()
    {
        return $this->fieldname;
    }

    /**
     * Set fieldtype
     *
     * @param string $fieldtype
     *
     * @return Displayfield
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
     * Set label
     *
     * @param string $label
     *
     * @return Displayfield
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set isforeign
     *
     * @param boolean $isforeign
     *
     * @return Displayfield
     */
    public function setIsforeign($isforeign)
    {
        $this->isforeign = $isforeign;

        return $this;
    }

    /**
     * Get isforeign
     *
     * @return boolean
     */
    public function getIsforeign()
    {
        return $this->isforeign;
    }

    /**
     * Set foreigntable
     *
     * @param string $foreigntable
     *
     * @return Displayfield
     */
    public function setForeigntable($foreigntable)
    {
        $this->foreigntable = $foreigntable;

        return $this;
    }

    /**
     * Get foreigntable
     *
     * @return string
     */
    public function getForeigntable()
    {
        return $this->foreigntable;
    }

    /**
     * Set foreignfield
     *
     * @param string $foreignfield
     *
     * @return Displayfield
     */
    public function setForeignfield($foreignfield)
    {
        $this->foreignfield = $foreignfield;

        return $this;
    }

    /**
     * Get foreignfield
     *
     * @return string
     */
    public function getForeignfield()
    {
        return $this->foreignfield;
    }

    /**
     * Set isautoincrement
     *
     * @param boolean $isautoincrement
     *
     * @return Displayfield
     */
    public function setIsautoincrement($isautoincrement)
    {
        $this->isautoincrement = $isautoincrement;

        return $this;
    }

    /**
     * Get isautoincrement
     *
     * @return boolean
     */
    public function getIsautoincrement()
    {
        return $this->isautoincrement;
    }

    /**
     * Set crudpageid
     *
     * @param \CodeGen\Entity\Crudpage $crudpageid
     *
     * @return Displayfield
     */
    public function setCrudpageid(\CodeGen\Entity\Crudpage $crudpageid = null)
    {
        $this->crudpageid = $crudpageid;

        return $this;
    }

    /**
     * Get crudpageid
     *
     * @return \CodeGen\Entity\Crudpage
     */
    public function getCrudpageid()
    {
        return $this->crudpageid;
    }
}
