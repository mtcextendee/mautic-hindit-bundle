<?php

/*
 * @copyright   2018 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return [
    'services' => [
        'events'  => [],
        'forms'   => [
        ],
        'helpers' => [],
        'other'   => [
            'mautic.sms.transport.hindit' => [
                'class'     => \MauticPlugin\MauticHinditBundle\Services\HinditApi::class,
                'arguments' => [
                    'mautic.page.model.trackable',
                    'mautic.helper.phone_number',
                    'mautic.helper.integration',
                    'monolog.logger.mautic',
                    'mautic.http.connector'
                ],
                'alias' => 'mautic.sms.config.transport.hindit',
                'tag'          => 'mautic.sms_transport',
                'tagArguments' => [
                    'integrationAlias' => 'Hindit',
                ],
            ],
        ],
        'models'       => [],
        'integrations' => [
            'mautic.integration.hindit' => [
                'class' => \MauticPlugin\MauticHinditBundle\Integration\HinditIntegration::class,
            ],
        ],
    ],
    'routes'     => [],
    'menu'       => [],
    'parameters' => [
    ],
];
