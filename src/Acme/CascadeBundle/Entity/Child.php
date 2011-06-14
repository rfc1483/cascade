<?php

namespace Acme\CascadeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="child")
 */
class Child {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Father")
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="father_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     *
     * @var father
     */
    private $father;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set father
     *
     * @param Acme\CascadeBundle\Entity\Father $father
     */
    public function setFather(\Acme\CascadeBundle\Entity\Father $father)
    {
        $this->father = $father;
    }

    /**
     * Get father
     *
     * @return Acme\CascadeBundle\Entity\Father $father
     */
    public function getFather()
    {
        return $this->father;
    }
}