<?php

require_once __DIR__ . "/vendor/autoload.php";

use Ember\Rpg\Exceptions\PetNotFoundException;
use Ember\Rpg\Units\{Hero, Pet};
use Ember\Rpg\Repositories\InMemoryPetsRepo;


try {
    $faker = Faker\Factory::create();

    $hero1 = new Hero(1, $faker->name(), 150);


    $repo = new InMemoryPetsRepo();

    for ($i = 0; $i < 10; $i++) {
        $pet = new Pet($i, $faker->name(), 50);
        $repo->save($pet);
    }

    echo $repo->get(15);


} catch (PetNotFoundException $exception) {
    echo $exception->getMessage();
} catch (Exception $exception) {
    print_r($exception->getTrace());
}

