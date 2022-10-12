<?php


namespace GeekBrains\LevelTwo\Blog;


class Comment
{
    private int $id;
    private int $user_id;
    private int $post_id;
    private string $text;

    /**
     * Comment constructor.
     * @param int $id
     * @param int $user_id
     * @param int $post_id
     * @param string $text
     */
    public function __construct(int $id, User $user, Post $post, string $text)
    {
        $this->id = $id;
        $this->user_id = $user->getId();
        $this->post_id = $post->getId();
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
     * @return int
     */
    public function getPostId(): int
    {
        return $this->post_id;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}