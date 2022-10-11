<?php

class Task
{
    private ?string $description;
    private ?int $dateCreated;
    private ?int $dateUpdated;
    private ?string $dateDone;
    private ?int $priority;
    private ?bool $isDone;
    private Comment $comment;

    function __construct(
        private User $user
    )
    {
        $this->user = $user;
    }

    public function markAsDone()
    {
        $this->isDone = true;

        $this->dateUpdated = time();
        $this->dateDone = time();
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        $this->dateUpdated = time();

        return $this;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getDateDone()
    {
        return $this->dateDone;
    }

    public function setDateDone($dateDone)
    {
        $this->dateDone = $dateDone;

        return $this;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    public function getIsDone()
    {
        return $this->isDone;
    }

    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
}
