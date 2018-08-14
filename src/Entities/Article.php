<?php
// src/Entities/Article.php
namespace App\Entities;

/**
 * @Entity
 * @Table(name="articles")
 */
class Article
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @var int|null
     */
    private $id;

    /**
     * @ManyToOne(targetEntity=User::class)
     * @JoinColumn(
     *     name="user_id",
     *     referencedColumnName="id",
     *     onDelete="CASCADE"
     * )
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

    public function __construct(
        User $user,
        string $title,
        string $body)
    {
        $this->user  = $user;
        $this->title = $title;
        $this->body  = $body;
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    public function getUser() : User
    {
        return $this->user;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getBody() : string
    {
        $this->body = $body;
    }
}
