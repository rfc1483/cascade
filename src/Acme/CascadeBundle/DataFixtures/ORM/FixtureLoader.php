<?php

namespace Acme\CascadeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\CascadeBundle\Entity\Child;
use Acme\CascadeBundle\Entity\Father;

class FixtureLoader implements FixtureInterface {

    public function load($manager) {
        // Create a new father
        $father = new Father();

        // Create a new child
        $child = new Child();
        $child->setFather($father);

        $manager->persist($father);
        $manager->persist($child);
        $manager->flush();
    }

}
