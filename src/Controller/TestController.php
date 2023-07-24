<?php

namespace App\Controller;

use App\Controller\Requests\TestPostRequest;
use App\Controller\Responses\TestPostResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'value' => $_GET["value"] ?? "nothing"
        ]);
    }

    #[Route('/test/post', name: 'app_test_post', methods: ['POST'])]
    public function post() : Response {
        $output = new TestPostResponse();

        $request = new TestPostRequest();
        $request->setValueName($_POST['valueName'] ?? "");
        $request->setValue($_POST['value'] ?? "");

        if($request->getValue()=="" || $request->getValueName()=="") {
            $output->setResponseValueName("Bad response");
            $output->setResponseValue("Bad Request");
            return new Response(content: json_encode($output), status: 200);
        }

        $output->setResponseValueName("Good response");
        $output->setResponseValue("$request->value");

        return new Response(content: json_encode($output), status: 200);
    }
}
