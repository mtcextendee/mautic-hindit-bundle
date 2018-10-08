<?php


/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticHinditBundle\Integration;

use Mautic\PluginBundle\Integration\AbstractIntegration;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class HinditIntegration.
 */
class HinditIntegration extends AbstractIntegration
{
    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return 'Hindit';
    }

    public function getIcon()
    {
        return 'plugins/MauticHinditBundle/Assets/img/hindit.png';
    }

    public function getSecretKeys()
    {
        return ['password'];
    }

    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function getRequiredKeyFields()
    {
        return [
            'loginID'  => 'mautic.plugin.hindit.login.id',
            'password' => 'mautic.plugin.hindit.password',
            'senderid' => 'mautic.plugin.hindit.sender.id',
            'route_id' => 'mautic.plugin.hindit.route.id',
        ];
    }

    /**
     * @param \Mautic\PluginBundle\Integration\Form|FormBuilder $builder
     * @param array                                             $data
     * @param string                                            $formArea
     */
    public function appendToForm(&$builder, $data, $formArea)
    {
        if ($formArea == 'keys') {

            /* @var FormBuilder $builder */
            $builder->add(
                'Unicode',
                TextType::class,
                [
                    'label'       => 'mautic.plugin.hindit.unicode',
                    'required'    => true,
                    'attr'        => [
                        'class' => 'form-control',
                    ],
                    'constraints' => [
                        new NotBlank(
                            [
                                'message' => 'mautic.core.value.required',
                            ]
                        ),
                    ],
                ]
            );

            $builder->add(
                'route_id',
                TextType::class,
                [
                    'label'       => 'mautic.plugin.hindit.route.id',
                    'required'    => true,
                    'attr'        => [
                        'class' => 'form-control',
                    ],
                    'constraints' => [
                        new NotBlank(
                            [
                                'message' => 'mautic.core.value.required',
                            ]
                        ),
                    ],
                ]
            );
        }
    }

    /**
     * @return array
     */
    public function getFormSettings()
    {
        return [
            'requires_callback'      => false,
            'requires_authorization' => false,
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getAuthenticationType()
    {
        return 'none';
    }
}
