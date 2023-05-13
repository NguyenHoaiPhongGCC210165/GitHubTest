
class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('ingredientName')
        ->add('quantity')
        ->add('save', SubmitType::class, [
            'label' => "Confirm"
        ])
        ;
    }
}

?>