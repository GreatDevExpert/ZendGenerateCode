<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filter
 *
 * @ORM\Table(name="filter", indexes={@ORM\Index(name="fk_FormField_Filter", columns={"FormFieldId"})})
 * @ORM\Entity
 */
class Filter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="FilterId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filterid;

    /**
     * @var string
     *
     * @ORM\Column(name="FilterName", type="string", length=150, nullable=false)
     */
    private $filtername;

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
     * Get filterid
     *
     * @return integer
     */
    public function getFilterid()
    {
        return $this->filterid;
    }

    /**
     * Set filtername
     *
     * @param string $filtername
     *
     * @return Filter
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
     * Set formfieldid
     *
     * @param \CodeGen\Entity\Formfield $formfieldid
     *
     * @return Filter
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
