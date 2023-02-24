<?php

require_once __DIR__ . '/vendor/autoload.php';

use GeekBrains\LevelTwo\Blog\{Post, User, Comment};

$faker = Faker\Factory::create('ru_RU');

$user = new User((int)$faker->uuid(),$faker->firstName(),$faker->lastName());
$post = new Post((int)$faker->uuid(), $user,$faker->title(),$faker->realText());
$comment = new Comment((int)$faker->uuid(),$user,$post,$faker->realText());


if ($argv[1]){
    $inputData = $argv[1];
}
else{
    $inputData = null;
}

switch ($inputData){

    case 'user': echo $user;
    break;
    case 'post': echo $post;
    break;
    case 'comment': echo $comment;
    break;
    default:
        echo 'Введите корректные данные';

}

