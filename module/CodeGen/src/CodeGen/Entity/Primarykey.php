<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Primarykey
 *
 * @ORM\Table(name="primarykey", indexes={@ORM\Index(name="fk_Form_PrimaryKey", columns={"FormId"})})
 * @ORM\Entity
 */
class Primarykey
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PkId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pkid;

    /**
     * @var string
     *
     * @ORM\Column(name="PrimaryKey", type="string", length=150, nullable=false)
     */
    private $primarykey;

    /**
     * @var string
     *
     * @ORM\Column(name="KeyType", type="string", length=150, nullable=false)
     */
    private $keytype;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsAutoIncrement", type="boolean", nullable=false)
     */
    private $isautoincrement = '0';

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
     * Get pkid
     *
     * @return integer
     */
    public function getPkid()
    {
        return $this->pkid;
    }

    /**
     * Set primarykey
     *
     * @param string $primarykey
     *
     * @return Primarykey
     */
    public function setPrimarykey($primarykey)
    {
        $this->primarykey = $primarykey;

        return $this;
    }

    /**
     * Get primarykey
     *
     * @return string
     */
    public function getPrimarykey()
    {
        return $this->primarykey;
    }

    /**
     * Set keytype
     *
     * @param string $keytype
     *
     * @return Primarykey
     */
    public function setKeytype($keytype)
    {
        $this->keytype = $keytype;

        return $this;
    }

    /**
     * Get keytype
     *
     * @return string
     */
    public function getKeytype()
    {
        return $this->keytype;
    }

    /**
     * Set isautoincrement
     *
     * @param boolean $isautoincrement
     *
     * @return Primarykey
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
     * Set formid
     *
     * @param \CodeGen\Entity\Form $formid
     *
     * @return Primarykey
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
