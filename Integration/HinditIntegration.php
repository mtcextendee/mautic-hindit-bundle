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
        ];
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
