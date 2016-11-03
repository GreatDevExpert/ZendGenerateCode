<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Navigationelement
 *
 * @ORM\Table(name="navigationelement", indexes={@ORM\Index(name="fk_Navigation_NavigationElement", columns={"NavigationId"}), @ORM\Index(name="fk_NavigationElement_NavigationElement", columns={"ParentElementId"})})
 * @ORM\Entity
 */
class Navigationelement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ElementId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $elementid;

    /**
     * @var string
     *
     * @ORM\Column(name="Key", type="string", length=150, nullable=false)
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var \CodeGen\Entity\Navigationelement
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Navigationelement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ParentElementId", referencedColumnName="ElementId")
     * })
     */
    private $parentelementid;

    /**
     * @var \CodeGen\Entity\Navigation
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Navigation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NavigationId", referencedColumnName="ComponentId")
     * })
     */
    private $navigationid;



    /**
     * Get elementid
     *
     * @return integer
     */
    public function getElementid()
    {
        return $this->elementid;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return Navigationelement
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Navigationelement
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
     * Set url
     *
     * @param string $url
     *
     * @return Navigationelement
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set parentelementid
     *
     * @param \CodeGen\Entity\Navigationelement $parentelementid
     *
     * @return Navigationelement
     */
    public function setParentelementid(\CodeGen\Entity\Navigationelement $parentelementid = null)
    {
        $this->parentelementid = $parentelementid;

        return $this;
    }

    /**
     * Get parentelementid
     *
     * @return \CodeGen\Entity\Navigationelement
     */
    public function getParentelementid()
    {
        return $this->parentelementid;
    }

    /**
     * Set navigationid
     *
     * @param \CodeGen\Entity\Navigation $navigationid
     *
     * @return Navigationelement
     */
    public function setNavigationid(\CodeGen\Entity\Navigation $navigationid = null)
    {
        $this->navigationid = $navigationid;

        return $this;
    }

    /**
     * Get navigationid
     *
     * @return \CodeGen\Entity\Navigation
     */
    public function getNavigationid()
    {
        return $this->navigationid;
    }
}
