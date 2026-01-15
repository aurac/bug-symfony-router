<?php

namespace App\DataFixtures;

use App\Entity\Dummy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DummyFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $dummy = new Dummy();
        $dummy->setSlug('dummy');
        $manager->persist($dummy);

        $manager->flush();
    }
}
