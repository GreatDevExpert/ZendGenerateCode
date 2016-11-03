<?php

namespace CodeGen\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Databasetype
 *
 * @ORM\Table(name="databasetype")
 * @ORM\Entity
 */
class Databasetype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DatabaseTypeId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $databasetypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=80, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ConnectionPattern", type="string", length=255, nullable=false)
     */
    private $connectionpattern;



    /**
     * Get databasetypeid
     *
     * @return integer
     */
    public function getDatabasetypeid()
    {
        return $this->databasetypeid;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Databasetype
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set connectionpattern
     *
     * @param string $connectionpattern
     *
     * @return Databasetype
     */
    public function setConnectionpattern($connectionpattern)
    {
        $this->connectionpattern = $connectionpattern;

        return $this;
    }

    /**
     * Get connectionpattern
     *
     * @return string
     */
    public function getConnectionpattern()
    {
        return $this->connectionpattern;
    }
}
