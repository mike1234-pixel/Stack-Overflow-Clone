<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// AbstractController gives us shortcut methods like render()
class QuestionController extends AbstractController {
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('this is coming from a controller');
    }

    /**
    * @Route("/questions/{slug}")
    */
    public function show($slug) {
        // first argument is the template to render, the second arg is an array of variables we're going to pass into the template
        // the render method returns a response object with html inside

        $answers = [
            'answer1',
            'answer2',
            'answer3'
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);

 
    }
}
