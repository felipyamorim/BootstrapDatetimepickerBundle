<?php
/*
 * This file is part of the FelipyAmorimBootstrapDatetimePickerBundle package.
 *
 * (c) Felipy Amorim <felipyamorim@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FelipyAmorim\BootstrapDateTimePickerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class DateTimePickerType.
 *
 * @author Felipy Amorim <felipyamorim@gmail.com>
 */
class DatePickerType extends AbstractType
{
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['picker_format'] = $options['picker_format'];
        $view->vars['picker_icon'] = $options['picker_icon'];
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'picker_format' => 'DD/MM/YYYY',
            'picker_icon' => false
        ));
    }

    public function getParent()
    {
        return DateType::class;
    }
}