<?php
  namespace  Acme\HelloBundle\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\Controller; 

  class GreetingsController extends Controller
  {
    public function indexAction($name)
    {
      $this->get('session')->setFlash('notice', 'ja hallo daar');

      //return $this->redirect($this->generateUrl('hello/' . $name));
      $response = $this->forward('AcmeHelloBundle:Hello:index', array('name' => 'cor'));

      return $response;
    }

  }