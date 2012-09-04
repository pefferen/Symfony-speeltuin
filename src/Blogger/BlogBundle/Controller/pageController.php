<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
  public function indexAction()
  {
    return $this->render('BloggerBlogBundle:Page:index.html.twig');
  }

  public function aboutAction()
  {
    Return $this->render('BloggerBlogBundle:Page:about.html.twig');
  }

}