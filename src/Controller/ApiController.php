<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ApiController
 * @package App\Controller
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index()
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    /**
     * @Route("/api/product/all", name="api")
     */
    public function getAll()
    {
//        User $user = $this->get('security.context')->getToken()->getUser();
//        dd($user->getUsername);

        $products = $this->getDoctrine()->getRepository(Product::class)
            ->findAll();
        dump($products);
    }
}
