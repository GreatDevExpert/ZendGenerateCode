<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity
 */
class Page
{
    /**
     * @var string
     *
     * @ORM\Column(name="PageTitle", type="string", length=250, nullable=false)
     */
    private $pagetitle;

    /**
     * @var string
     *
     * @ORM\Column(name="MetaKeywords", type="string", length=500, nullable=true)
     */
    private $metakeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="MetaDescription", type="string", length=500, nullable=true)
     */
    private $metadescription;

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
     * Set pagetitle
     *
     * @param string $pagetitle
     *
     * @return Page
     */
    public function setPagetitle($pagetitle)
    {
        $this->pagetitle = $pagetitle;

        return $this;
    }

    /**
     * Get pagetitle
     *
     * @return string
     */
    public function getPagetitle()
    {
        return $this->pagetitle;
    }

    /**
     * Set metakeywords
     *
     * @param string $metakeywords
     *
     * @return Page
     */
    public function setMetakeywords($metakeywords)
    {
        $this->metakeywords = $metakeywords;

        return $this;
    }

    /**
     * Get metakeywords
     *
     * @return string
     */
    public function getMetakeywords()
    {
        return $this->metakeywords;
    }

    /**
     * Set metadescription
     *
     * @param string $metadescription
     *
     * @return Page
     */
    public function setMetadescription($metadescription)
    {
        $this->metadescription = $metadescription;

        return $this;
    }

    /**
     * Get metadescription
     *
     * @return string
     */
    public function getMetadescription()
    {
        return $this->metadescription;
    }

    /**
     * Set componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Page
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
