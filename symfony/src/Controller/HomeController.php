<?php
namespace App\Controller;

use App\Entity\Customer;
use Doctrine\Persistence\ManagerRegistry;
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
	public function SqlHTTP(ManagerRegistry $doctrine)
	{
		$repository = $doctrine->getRepository(Customer::class);
		$customers = $repository->findAll();
		dd($customers);
		return new Response(json_encode($repository->findAll()), Response::HTTP_OK, ['content-type' => 'application/json']);
	}
}