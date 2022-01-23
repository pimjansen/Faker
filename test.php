<?php

require 'vendor/autoload.php';

use Faker\Provider\en_US\Person;
use Faker\Provider\zh_CN\Person as Zh_CNPerson;

// =============================
$faker = Faker\Factory::create();
// $faker->addProvider(new Person($faker));

for ($i = 0; $i < 10; ++$i) { // 10x US-international names
    var_dump($faker->name());
}

$faker->addProvider(new Zh_CNPerson($faker));

for ($i = 0; $i < 100; ++$i) { // 10x random us or zh_cnp names
    var_dump($faker->name());
}
