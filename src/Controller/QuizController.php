<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Entity\Answer;
use App\Entity\History;
use App\Entity\Question;
use App\Entity\Categorie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizController extends AbstractController
{   
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('quiz/home.html.twig', [
            'controller_name' => 'QuizController',
        ]);
    }

    /**
     * @Route("/categorie", name="categorie_list")
     */

   // <p style="color: {{ rand }};">{{ categorie.description | slice(0, 25)}}...<p>
    //<img class="rounded mx-auto d-block" src="{{ categorie.image }}" alt="">
    //</p>{{ categorie.createdAt | date('d/m/Y') }} à {{ categorie.createdAt | date('H:i')}}</p>


    public function list()
    {
        $categories = $this->getDoctrine()
        ->getRepository(Categorie::class)
        ->findAll();

        return $this->render('quiz/list.html.twig', [
            'controller_name' => 'QuizController',
            'categories'=> $categories,
        ]);
        
    }



    /**
     * @Route("/show_categorie/{id}", name="show_categorie")
     */
    public function show($id)
    {
        $categorie = $this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $quizs = $this->getDoctrine()->getRepository(Categorie::class)->find($id)->getQuizzes();
        foreach ($quizs as $value) {
            dump($value);
        }
        return $this->render('quiz/show.html.twig', [
            'controller_name' => 'QuizController',
            'quizs'=> $quizs,
            'categorie'=> $categorie,
        ]);
        
    }

    /**
     * @Route("/show_quiz/{id}", name="show_quiz")
     */
    public function show_quiz($id)
    {
        $quiz = $this->getDoctrine()->getRepository(Quiz::class)->find($id);


        return $this->render('quiz/show_quiz.html.twig', [
            'controller_name' => 'QuizController',
            'quiz'=> $quiz,
        ]);
        
    }


    /**
     * @Route("/lauch_quiz/{id}", name="lauch_quiz")
     */
    public function lauch($id, Request $request = null)
    {

        $quiz = $this->getDoctrine()->getRepository(Quiz::class)->find($id);
        $questions = $this->getDoctrine()->getRepository(Quiz::class)->find($id)->getQuestions();
        $score = 0;
        $nbr_question = 0;
        if ($request->request->has('check')) {
            $params = $request->request->all();
            $result = array();
            foreach ($questions as $value) {
                $nbr_question++;
                foreach ($value->getAnswers() as $answer) {
                    foreach ($params as $param) {
                        if ($answer->getContent() == $param) {
                            if($answer->getCorrect()){
                                array_push($result, array($param, true));
                                $score++;
                            }
                            else{
                                array_push($result, array($param, false));
                            }
                        }
                    }
                   // echo $request->request->getContent();
                  // echo $answer->getCorrect();
                }
            }
            return $this->redirectToRoute('result', [
                'score' => $score,
                'nbr_question' => $nbr_question,
                'id_quiz' => $id,
                'result' => $result,
            ]);
        }
        else{
            return $this->render('quiz/lauch.html.twig', [
                'controller_name' => 'QuizController',
                'questions' => $questions,
                'quiz' => $quiz,
            ]);
        }     
    }

    /**
     * @Route("/result", name="result")
     */
    public function result(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $params = $request->query->get('result');
        $id = $request->query->get('id_quiz');
        $quiz = $this->getDoctrine()->getRepository(Quiz::class)->find($id);
        $questions = $this->getDoctrine()->getRepository(Quiz::class)->find($id)->getQuestions();
        $plus = $quiz->getPop();
        $plus = $plus + 1;
        $quiz->setPop($plus);
        $entityManager->persist($quiz);
        $user = $this->getUser();
        $history = new History();
        $history->setUser($user);
        $history->setQuiz($quiz);
        $history->setCreatAt( new \DateTime());
        
        $nbr_question = $request->query->get('nbr_question');
        $score = $request->query->get('score');


        $history->setScore($score .'/'.$nbr_question);

        $entityManager->persist($history);
        $entityManager->flush();

        //todo score++;
        return $this->render('quiz/display_result.html.twig', [
            'results' => $params,
            'questions' => $questions,
            'quiz' => $quiz,
        ]);
    }

    /**
     * @Route("/creat", name="creat_quiz")
     */
    public function creat(Request $request = null)
    {
        $categories = $this->getDoctrine()
        ->getRepository(Categorie::class)
        ->findAll();

        return $this->render('quiz/creat.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/verif", name="quiz_verif")
     */
    public function verif(Request $request)
    {
        $user = $this->getUser();
        //dd($user);
        $entityManager = $this->getDoctrine()->getManager();
        if($request->isMethod('post'))
        {
            $nrb_of_question = 0;
            for ($i=1; $i <= 20 ; $i++) { 
                $question = $request->request->get("Q".$i);
                if (!empty($question)) {
                    $nrb_of_question++;
                    $nrb_of_reponse = 0;
                    for ($a=1; $a < 4 ; $a++) { 
                        $reponse = $request->request->get("R".$a."_Q".$i);              
                        if (!empty($reponse)) {
                            $nrb_of_reponse++;
                        }
                    }
                    if ($nrb_of_reponse != 3) { //il a une question qui n'a 3 reponses
                        $this->addFlash('error', 'Quiz non cree, verifier les regles de creation !!!');
                        return $this->redirectToRoute('creat_quiz');
                    }
                }
            }
            if ($nrb_of_question >= 5) { // quiz valid
                $categories = $this->getDoctrine()->getRepository(Categorie::class)->find($request->request->get("categorie"));
                $Quiz = new Quiz;
                $Quiz->setName($request->request->get("name"));
                $Quiz->setImage($request->request->get("image"));
                $Quiz->setCategorie($categories);
                $Quiz->setAuthor($user);
                $Quiz->setCreatedAt( new \DateTime());
                
                
                $entityManager->persist($Quiz);
                //quiz created
                for ($i=1; $i <= $nrb_of_question ; $i++) { 
                    $question = $request->request->get("Q".$i);
                    if (!empty($question)) {
                        $Question = new Question;
                        $Question->setContent($request->request->get("Q".$i));
                        $Question->setQuiz($Quiz);
                        $entityManager->persist($Question); // esque faut flush ?
                        //question created
                        for ($a=1; $a < 4 ; $a++) { 
                            $Answer = $request->request->get("R".$a."_Q".$i);              
                            if (!empty($Answer)) {
                                $Answer = new Answer;
                                $Answer->setContent($request->request->get("R".$a."_Q".$i));
                                $Answer->setQuestion($Question);
                                if($a == 1){
                                    $Answer->setCorrect(1);
                                }
                                else {
                                    $Answer->setCorrect(0);
                                }
                                $entityManager->persist($Answer);
                                //Answer created
                            }
                        }
                    }
                }
                $entityManager->flush();
                $this->addFlash('success', 'Quiz cree avec succes !');
                return $this->redirectToRoute('profil');
            }
        }
        $this->addFlash('error', 'Quiz non cree, verifier les regle de creation !');
        return $this->redirectToRoute('creat_quiz');
    }



}
