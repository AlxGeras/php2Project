<?php

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Person;

class  Post
{
    private int $id;
    private int $user_id;
    private string $heading;
    private string $text;

    public function __construct(
        int $id,
        User $user,
        string $heading,
        string $text
    )
    {
        $this->id = $id;
        $this->user_id = $user->getId();
        $this->heading = $heading;
        $this->text = $text; 
    }

    public function __toString()
    {
        return $this->getText();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
