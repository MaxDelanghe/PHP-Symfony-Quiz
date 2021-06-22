<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;

use App\Form\UpdateFormType;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class SecurityController extends AbstractController
{

    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush();
        }

        return $this->render('security/registration.html.twig',
        [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('home');
         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
    /**
     * @Route("/profil", name="profil")
     */
    public function viewProfil()
    {
        $user = $this->getUser();
        $quizs = $user->getQuizzes();
        $historys = $user->getHistories();
        $collections = array();
        $collections_Historys = array();

        foreach ($historys as $history) {
            $tempo = array();
            $tempo['date'] = $history->getCreatAt();
            $tempo['score'] = $history->getScore();
            $tempo['name'] = $history->getQuiz()->getName();
            $tempo['pop'] = $history->getQuiz()->getPop();
            $tempo['categorie_name'] = $history->getQuiz()->getCategorie()->getName();
            array_push($collections_Historys, $tempo);
        }
       // dd($collections_Historys);

        foreach ($quizs as $quiz) {
            $tempo = array();
            $tempo['categorie_name'] = $quiz->getCategorie()->getName();
            $tempo['name'] = $quiz->getName();
            $tempo['date'] = $quiz->getCreatedAt();
            $tempo['pop'] = $quiz->getPop();
            array_push($collections, $tempo);
        }
        return $this->render('security/userprofile.html.twig', [
            "user" => $user,
            "collections" => $collections,
            "collections_Historys" => $collections_Historys,
            
        ]);
    }

}


