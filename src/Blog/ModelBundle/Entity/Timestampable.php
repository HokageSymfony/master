<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 27.01.16
 * Time: 16:57
 */

namespace Blog\ModelBundle\Entity;

/**
 * Class Timestampable to defined created behavior
 *
 * @package Blog\ModelBundle\Entity
 */
abstract class Timestampable
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->getCreatedAt = new \DateTime();
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