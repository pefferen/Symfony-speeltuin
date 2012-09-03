<?php
  namespace Acme\HelloBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class HelloController extends Controller
  {
    public function indexAction($name)
    {
      //$this->setFlash('notice', 'ja hallo daar');

      return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('name' => $name ));

      // Render a PHP template instead
      // return new Response('<html><body>Hello ' . $name . '!</body></html>');
    }
  }