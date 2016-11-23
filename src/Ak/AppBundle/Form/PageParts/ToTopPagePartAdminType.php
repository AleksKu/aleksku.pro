<?php

namespace Ak\AppBundle\Form\PageParts;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * ToTopPagePartAdminType
 */
class ToTopPagePartAdminType extends AbstractType
{
    /**
     * Builds the form.
     *
     * This method is called for each type in the hierarchy starting form the
     * top most type. Type extensions can further modify the form.
     * @param FormBuilderInterface $builder The form builder
     * @param array $options The options
     *
     * @see FormTypeExtensionInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	parent::buildForm($builder, $options);
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getBlockPrefix()
    {
	return 'totoppageparttype';
    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
	$resolver->setDefaults(array(
	    'data_class' => '\Ak\AppBundle\Entity\PageParts\ToTopPagePart'
	));
    }
}