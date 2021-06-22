<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Categorie;
use App\Repository\UserRepository;
use App\Form\CategorieTypeFormType;
use App\Form\UserUpdateAdminFormType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @IsGranted("ROLE_ADMIN")
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="secret")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function usersList(UserRepository $users)
    {
        return $this->render('admin/users.html.twig', [
            'users' => $users->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/utilisateurs/modifier/{id}", name="modifier_utilisateur")
     */
    public function editUser(User $user, Request $request)
    {
        $form = $this->createForm(UserUpdateAdminFormType::class, $user);
        $form->handleRequest($request);
    

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('admin_utilisateurs');
        }
        
        return $this->render('admin/edituser.html.twig', [
            'userForm' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/erase_user/{id}", name="erase_user")
     */
    public function eraseUser( UserRepository $userRepository, Request $request, EntityManagerInterface $manager)
    {
        $id = $request->get('id');
        $user = $userRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'User suprimer avec succès');
        return $this->redirectToRoute('admin_secret');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/email_to_user/{id}", name="email_to_user")
     */
    public function EmailToUser( UserRepository $userRepository, Request $request, EntityManagerInterface $manager)
    {
        $id = $request->get('id');
        $user = $userRepository->find($id);
        dd("pas fait");

        return $this->render('admin/email_to_user.html.twig', [
            'userForm' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/creat_categorie", name="creat_categorie")
     */
    public function creatCategorie( Request $request, EntityManagerInterface $manager)
    {
        $cat = new Categorie;
        $form = $this->createForm(CategorieTypeFormType::class, $cat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
       // dd($form);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cat);
            $entityManager->flush();

            $this->addFlash('success', 'Categorie ajouter avec succès');
            return $this->redirectToRoute('admin_secret');
        }

        return $this->render('admin/categorie.html.twig', [
            'categorieForm' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/creat_categorie/{id}", name="edit_categorie")
     */
    public function editCategorie( Request $request, EntityManagerInterface $manager, CategorieRepository $CategorieRepository)
    {
        $id = $request->get('id');
        $cat = $CategorieRepository->find($id);
        $form = $this->createForm(CategorieTypeFormType::class, $cat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cat);
            $entityManager->flush();

            $this->addFlash('success', 'Categorie ajouter avec succès');
            return $this->redirectToRoute('admin_secret');
        }

        return $this->render('admin/categorie.html.twig', [
            'categorieForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editlist_categorie", name="editlist_categorie")
     */
    public function show()
    {
        $categories = $this->getDoctrine()
        ->getRepository(Categorie::class)
        ->findAll();

        return $this->render('admin/listCategorie.html.twig', [
            'categories'=> $categories,
        ]);
        
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/erase_categorie/{id}", name="erase_categorie")
     */
    public function eraseCategorie( Request $request, EntityManagerInterface $manager)
    {
        $id = $request->get('id');
        $cat = $CategorieRepository->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($cat);
        $entityManager->flush();

        $this->addFlash('success', 'Categorie suprimer avec succès');
        return $this->redirectToRoute('admin_secret');
    }

}
