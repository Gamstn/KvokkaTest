<?php

namespace App\Controller;
use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TaskController extends AbstractController
{
    /**
     * @Route("/new-task", name="new_task")
     */
    public function new (Request $request)
    {
        $selectedOption = $request->request->get('figure');
        $selectedOptionString = (string) $selectedOption;
        $task = new Task(); // Create a new Task object

        $form = $this->createForm(TaskType::class, $task); // Create the form

        $form->handleRequest($request); // Handle the request

        if ($form->isSubmitted() && $form->isValid()) {
            // Perform some action, such as saving the task to the database

            return $this->redirectToRoute('login'); // Redirect on success
        }

        return $this->render('Task/new.html.twig', [
            'form' => $form->createView(), // Pass the form to the template
        ]);
    }
}