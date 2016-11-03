<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contentpage
 *
 * @ORM\Table(name="contentpage")
 * @ORM\Entity
 */
class Contentpage
{
    /**
     * @var string
     *
     * @ORM\Column(name="CustomUrl", type="string", length=150, nullable=false)
     */
    private $customurl;

    /**
     * @var string
     *
     * @ORM\Column(name="Content", type="text", length=65535, nullable=true)
     */
    private $content;

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
     * Set customurl
     *
     * @param string $customurl
     *
     * @return Contentpage
     */
    public function setCustomurl($customurl)
    {
        $this->customurl = $customurl;

        return $this;
    }

    /**
     * Get customurl
     *
     * @return string
     */
    public function getCustomurl()
    {
        return $this->customurl;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Contentpage
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set componentid
     *
     * @param \CodeGen\Entity\Component $componentid
     *
     * @return Contentpage
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
