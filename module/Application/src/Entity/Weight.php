<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a single post in a blog.
 * @ORM\Entity
 * @ORM\Table(name="weight")
 */
class Weight
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

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

}