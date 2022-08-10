<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
	#[Route('/HelloHTTP')]
	public function HelloHTTP()
	{
		return new Response('Hello World', Response::HTTP_OK, ['content-type' => 'text/html']);
	}

	#[Route('/PongHTTP')]
	public function PongHTTP(Request $request)
	{
		return new Response($request->getContent(), Response::HTTP_OK, ['content-type' => 'text/html']);
	}

	#[Route('/SqlHTTP')]
	public function SqlHTTP()
	{
		$customers = ['test'];
		return new Response(json_encode($customers), Response::HTTP_OK, ['content-type' => 'application/json']);
	}
}