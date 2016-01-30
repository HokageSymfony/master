<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 29.01.16
 * Time: 17:05
 */

//namespace Blog\ModelBundle\DataFixtures\ORM;
//
//use Blog\ModelBundle\Entity\Author;
////use Doctrine\Common\DataFixtures\AbstractFixture;
//use Doctrine\DBAL\Migrations\Finder\AbstractFinder;
////use Doctrine\DBAL\Migrations\Finder\AbstractFinder;
//use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
//use Doctrine\Common\Persistence\ObjectManager;

namespace Blog\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\DBAL\Migrations\Finder\AbstractFinder;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Blog\ModelBundle\Entity\Author;


/**
 * Class Authors load Fixture Authors
 *
 * @package Blog\ModelBundle\DataFixtures\ORM
 */
abstract class Authors extends AbstractFinder implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $a1 = new Author();
        $a1->setName("Vlad");

        $a2 = new Author();
        $a2->setName("Nikolay");

        $a3 = new Author();
        $a3->setName("Edgar");

        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);
        $manager->flush();
    }



}