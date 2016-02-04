<?php
/**
 * Created by PhpStorm.
 * User: hsn
 * Date: 9/13/14
 * Time: 11:25 AM
 */

namespace Blog\ModelBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Timestampable
 *
 * @package Blog\ModelBundle\Entity
 */
abstract class Timestampable
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Author
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}