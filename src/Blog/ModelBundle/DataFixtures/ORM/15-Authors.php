<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 29.01.16
 * Time: 17:05
 */

namespace Blog\ModelBundle\DataFixtures\ORM;

//use Blog\ModelBundle\Entity\Author;
////use Doctrine\Common\DataFixtures\AbstractFixture;
//use Doctrine\DBAL\Migrations\Finder\AbstractFinder;
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
 * Class Posts load Fixture Authors
 *
 * @package Blog\ModelBundle\DataFixtures\ORM
 */
abstract class Posts extends AbstractFinder implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 15;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle("1 Lorem Impsum post");
        $p1->setBody(
            "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet."
        );

        $p1->setAuthor($this->getAuthor($manager, 'Vlad'));

        $p2 = new Post();
        $p2->setTitle("2 Lorem Impsum post");
        $p2->setBody(
            "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet."
        );

        $p2->setAuthor($this->getAuthor($manager, 'Nikolay'));

        $p3 = new Post();
        $p3->setTitle("3 Lorem Impsum post");
        $p3->setBody(
            "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet."
        );

        $p3->setAuthor($this->getAuthor($manager, 'Edgar'));

        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);

        $manager->flush();
    }

    /**
     * @param ObjectManager $manager
     * @param               $name
     *
     * @return Author|object
     */
    private function getAuthor(ObjectManager $manager, $name)
    {
        return $manager->getRepository('ModelBundle:Author')->findOneBy(
            [
                'name' => $name,
            ]
        );
    }
}