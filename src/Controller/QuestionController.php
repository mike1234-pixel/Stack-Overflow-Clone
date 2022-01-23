<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('this is coming from a controller');
    }

    /**
    * @Route("/questions/question-1")
    */
    public function show() {
        return new Response('future page to show a question');
    }
}
