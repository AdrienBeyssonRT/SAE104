<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BlogController extends AbstractController
{
    #[Route('/base', name: 'base')]
    public function home(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/cv', name: 'cv')]
    public function cv(Request $request): Response
    {
        // Créez le formulaire directement dans le contrôleur
        $form = $this->createFormBuilder()
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class, ['required' => false])
            ->getForm();

        // Gérez la soumission du formulaire
        $form->handleRequest($request);

        // Vérifiez si le formulaire a été soumis et est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Traitez les données du formulaire comme nécessaire
            $data = $form->getData();
            // Faites quelque chose avec les données, par exemple, redirigez vers un fichier PDF
            return $this->redirect('Beysson Adrien.pdf');
        }

        // Rendre la page CV avec le formulaire
        return $this->render('blog/cv.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig');
    }

    #[Route('/competence', name: 'competence')]
public function competence(): Response
{
    return $this->render('blog/competence.html.twig');
}

#[Route('/plus', name: 'plus')]
public function plus(): Response
{
    return $this->render('blog/plus.html.twig');
}

}
