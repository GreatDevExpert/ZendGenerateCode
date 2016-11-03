<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validator
 *
 * @ORM\Table(name="validator", indexes={@ORM\Index(name="fk_FormField_Validator", columns={"FormFieldId"})})
 * @ORM\Entity
 */
class Validator
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ValidatorId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $validatorid;

    /**
     * @var string
     *
     * @ORM\Column(name="FilterName", type="string", length=150, nullable=false)
     */
    private $filtername;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AllowWhiteSpace", type="boolean", nullable=false)
     */
    private $allowwhitespace = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsRegExp", type="boolean", nullable=false)
     */
    private $isregexp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RegExpression", type="string", length=150, nullable=false)
     */
    private $regexpression;

    /**
     * @var \CodeGen\Entity\Formfield
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Formfield")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FormFieldId", referencedColumnName="FormFieldId")
     * })
     */
    private $formfieldid;



    /**
     * Get validatorid
     *
     * @return integer
     */
    public function getValidatorid()
    {
        return $this->validatorid;
    }

    /**
     * Set filtername
     *
     * @param string $filtername
     *
     * @return Validator
     */
    public function setFiltername($filtername)
    {
        $this->filtername = $filtername;

        return $this;
    }

    /**
     * Get filtername
     *
     * @return string
     */
    public function getFiltername()
    {
        return $this->filtername;
    }

    /**
     * Set allowwhitespace
     *
     * @param boolean $allowwhitespace
     *
     * @return Validator
     */
    public function setAllowwhitespace($allowwhitespace)
    {
        $this->allowwhitespace = $allowwhitespace;

        return $this;
    }

    /**
     * Get allowwhitespace
     *
     * @return boolean
     */
    public function getAllowwhitespace()
    {
        return $this->allowwhitespace;
    }

    /**
     * Set isregexp
     *
     * @param boolean $isregexp
     *
     * @return Validator
     */
    public function setIsregexp($isregexp)
    {
        $this->isregexp = $isregexp;

        return $this;
    }

    /**
     * Get isregexp
     *
     * @return boolean
     */
    public function getIsregexp()
    {
        return $this->isregexp;
    }

    /**
     * Set regexpression
     *
     * @param string $regexpression
     *
     * @return Validator
     */
    public function setRegexpression($regexpression)
    {
        $this->regexpression = $regexpression;

        return $this;
    }

    /**
     * Get regexpression
     *
     * @return string
     */
    public function getRegexpression()
    {
        return $this->regexpression;
    }

    /**
     * Set formfieldid
     *
     * @param \CodeGen\Entity\Formfield $formfieldid
     *
     * @return Validator
     */
    public function setFormfieldid(\CodeGen\Entity\Formfield $formfieldid = null)
    {
        $this->formfieldid = $formfieldid;

        return $this;
    }

    /**
     * Get formfieldid
     *
     * @return \CodeGen\Entity\Formfield
     */
    public function getFormfieldid()
    {
        return $this->formfieldid;
    }
}
