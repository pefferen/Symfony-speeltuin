<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Blog Controller.
 */
class BlogController extends Controller
{
  /**
   * Show a blog entry
   */
  public function showAction($id, $slug)
  {
    $em = $this->getDoctrine()->getEntityManager();

    $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

    if (!$blog)
    {
      throw $this->createNotFoundException('Unable to find blogpost.');
    }

    $comments = $em->getRepository('BloggerBlogBundle:Comment')
                   ->getCommentsForBlog($blog->getId());

    return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
      'blog'      => $blog,
      'comments'  => $comments
      ));
  }
}