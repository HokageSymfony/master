<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class PostController
 *
 * @package Blog\CoreBundle\Controller
 */
class PostController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     * @return array
     */
    public function indexAction()
    {
        $posts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findAll();
        $latestPosts = $this->getDoctrine()->getRepository('ModelBundle:Post')->findLatest(2);

        return array(
            'latest_posts' => $latestPosts,
            'posts' => $posts
        );
    }

}
