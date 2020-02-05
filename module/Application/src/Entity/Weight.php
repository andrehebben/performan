<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a single post in a blog.
 * @ORM\Entity
 * @ORM\Table(name="weight")
 */
final class Weight
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

    /**
     * @ORM\Column(name="date_created")
     */
    protected $dateCreated;

    /**
     * @ORM\Column(type="decimal", precision=3, scale=2,  name="weight")
     */
    protected $weight;

    // Returns ID of this post.
    public function getId()
    {
        return $this->id;
    }

    // Sets ID of this post.
    public function setId($id)
    {
        $this->id = $id;
    }

    // Returns the date when this comment was created.
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    // Sets the date when this comment was created.
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }
}
