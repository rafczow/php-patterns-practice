<?php

namespace src\Prototype;

/**
 * Prototype.
 */
class Task
{
    private $title;

    private $description;

    /**
     * @var User
     */
    private $user;

    private $comments = [];

    /**
     * @var \DateTime
     */
    private $date;

    // +100 private fields.

    public function __construct(string $title, string $description, User $user)
    {
        $this->title = $title;
        $this->body = $body;
        $this->user = $user;
        $this->user->addToPage($this);
        $this->date = new \DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * You can control what data you want to carry over to the cloned object.
     *
     * For instance, when a page is cloned:
     * - It gets a new "Copy of ..." title.
     * - The author of the page remains the same. Therefore we leave the
     * reference to the existing object while adding the cloned page to the list
     * of the author's pages.
     * - We don't carry over the comments from the old page.
     * - We also attach a new date object to the page.
     */
    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->user->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}
