<?php

namespace App\Form;
use App\Entity\FF;
use App\Repository\ColRepository;
use App\Repository\FigRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class FUType extends AbstractType
{
    private $colRepository;
    private $figRepository;
    public function __construct(colRepository $colRepository, FigRepository $figRepository)
    {
        $this->colRepository = $colRepository;
        $this->figRepository = $figRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dis')
            ->add('email')
            ->add('color', ChoiceType::class, [
                'choices' => $this->getColChoices(),
            ])
            ->add('figure',ChoiceType::class, [
                'choices' => $this->getFigChoices(),
            ])
            ->add('photo',FileType::class, [
        'label' => 'Выберите фотографии',
        'multiple' => true,
        'attr' => [
            'accept' => 'image/*',
            'maxFiles' => 4,
        ],
    ])
            ->add('submit', SubmitType::class, [
                'label' => 'Загрузить',
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FF::class,
        ]);
    }

    private function getColChoices(): array
    {
        $colEntities = $this->colRepository->findAll();
        $choices = [];
        foreach ($colEntities as $colEntity) {
            $choices[$colEntity->getColors()] = $colEntity->getId();
        }
        return $choices;
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
