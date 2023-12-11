<?php

namespace App\Form;

use App\Entity\Task;
use App\Repository\FigRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    private $figRepository;
    public function __construct(FigRepository $figRepository)
    {
        $this->figRepository = $figRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('taskName')
            ->add('figure',ChoiceType::class, [
                'choices' => $this->getFigChoices(),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
    private function getFigChoices(): array
    {
        $figEntities = $this->figRepository->findAll();
        $choices = [];
        foreach ($figEntities as $figEntity) {
            $choices[$figEntity->getFigure()] = $figEntity->getId();
        }
        return $choices;
    }
}
