<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application", indexes={@ORM\Index(name="fk_Admin_Application", columns={"AdminId"}), @ORM\Index(name="fk_DatabaseType_Application", columns={"DatabaseTypeId"})})
 * @ORM\Entity
 */
class Application
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ApplicationId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applicationid;

    /**
     * @var string
     *
     * @ORM\Column(name="DatabaseUserName", type="string", length=150, nullable=false)
     */
    private $databaseusername;

    /**
     * @var string
     *
     * @ORM\Column(name="DatabasePassword", type="string", length=150, nullable=false)
     */
    private $databasepassword;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \CodeGen\Entity\Admin
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminId", referencedColumnName="AdminId")
     * })
     */
    private $adminid;

    /**
     * @var \CodeGen\Entity\Databasetype
     *
     * @ORM\ManyToOne(targetEntity="CodeGen\Entity\Databasetype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DatabaseTypeId", referencedColumnName="DatabaseTypeId")
     * })
     */
    private $databasetypeid;



    /**
     * Get applicationid
     *
     * @return integer
     */
    public function getApplicationid()
    {
        return $this->applicationid;
    }

    /**
     * Set databaseusername
     *
     * @param string $databaseusername
     *
     * @return Application
     */
    public function setDatabaseusername($databaseusername)
    {
        $this->databaseusername = $databaseusername;

        return $this;
    }

    /**
     * Get databaseusername
     *
     * @return string
     */
    public function getDatabaseusername()
    {
        return $this->databaseusername;
    }

    /**
     * Set databasepassword
     *
     * @param string $databasepassword
     *
     * @return Application
     */
    public function setDatabasepassword($databasepassword)
    {
        $this->databasepassword = $databasepassword;

        return $this;
    }

    /**
     * Get databasepassword
     *
     * @return string
     */
    public function getDatabasepassword()
    {
        return $this->databasepassword;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Application
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
     * Set title
     *
     * @param string $title
     *
     * @return Application
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Application
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adminid
     *
     * @param \CodeGen\Entity\Admin $adminid
     *
     * @return Application
     */
    public function setAdminid(\CodeGen\Entity\Admin $adminid = null)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return \CodeGen\Entity\Admin
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set databasetypeid
     *
     * @param \CodeGen\Entity\Databasetype $databasetypeid
     *
     * @return Application
     */
    public function setDatabasetypeid(\CodeGen\Entity\Databasetype $databasetypeid = null)
    {
        $this->databasetypeid = $databasetypeid;

        return $this;
    }

    /**
     * Get databasetypeid
     *
     * @return \CodeGen\Entity\Databasetype
     */
    public function getDatabasetypeid()
    {
        return $this->databasetypeid;
    }
}
