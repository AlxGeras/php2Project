<?php

namespace Ember\Rpg\Units;

use Ember\Rpg\Common\Unit;

class Hero extends Unit
{
    private ?array $inventory = [];

    public function __construct(int $id = null, string $name = null, int $hp = null, array $inventory = null)
    {
        parent::__construct($id, $name, $hp);
        $this->inventory = $inventory;
    }
}