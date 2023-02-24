<?php

namespace Ember\Rpg\Common;

class Unit
{
    protected ?int $id;
    public ?string $name;
    public ?int $hp;


    public function __construct(int $id = null, string $name = null, int $hp = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->hp = $hp;
    }

    public function id()
    {
        return $this->id;
    }

    public static function ping() {
        echo "pong" . PHP_EOL;
    }

    public function __toString(): string
    {
        return "Привет от " . $this->name . PHP_EOL;
    }
}