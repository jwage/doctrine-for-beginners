<?php
// src/Entities/Article.php
namespace App\Entities;

/**
 * @Entity
 * @Table(name="articles")
 */
final class Article
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int|null
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     * @var User
     */
    private $user;

    /**
     * @Column(type="string", length=255)
     * @var string
     */
    private $title = '';

    /**
     * @Column(type="text")
     * @var string
     */
    private $body = '';

    // ...

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setBody(string $body) : void
    {
        $this->body = $body;
    }

    public function getBody() : string
    {
        $this->body = $body;
    }
}
