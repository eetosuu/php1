<?php

class Comment
{

    function __construct(
        private User $author,
        private Task $task,
        private string $text
    )
    {
        $this->author = $author;
        $this->task = $task;

    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}
