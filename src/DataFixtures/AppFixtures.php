<?php

namespace App\DataFixtures;

use App\Entity\Vacataire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $vacataire = new Vacataire();
            $vacataire->setNom($faker->lastName());

            $manager->persist($vacataire);
        }

        $manager->flush();
    }
}
