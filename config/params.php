<?php
/**
 * truedomain.biz asset files: images, configs and more
 *
 * @link      https://github.com/ahnames/yii-asset-0domain
 * @package   yii-asset-0domain
 * @license   proprietary
 * @copyright Copyright (c) 2018, AHnames (https://ahnames.com/)
 */

$supportEmail = 'info@truedomain.biz';

return [
    'favicon.ico'       => '@ahnames/assets/truedomain/assets/images/favicon.ico',

    'organization.name'     => '0Domain',
    'organization.url'      => 'https://truedomain.biz/',
    'organization.termsUrl' => 'https://truedomain.biz/rules',

    'supportEmail'      => $supportEmail,
    'adminEmail'        => 'support@truedomain.biz',
    'abuseEmail'        => 'sales@truedomain.biz',
    'salesEmail'        => 'misuse@truedomain.biz',
    'gdprEmail'         => $supportEmail,

    'legals.privacyPolicyUrl' => 'https://truedomain.biz/rules/privacy',

    'copyright.year'    => 2015,

    'logo.image'                => '@ahnames/assets/truedomain/assets/images/logo.gif',
    'logo.smallImage'           => '@ahnames/assets/truedomain/assets/images/logo.gif',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links' => [
        'email'     => 'mailto:' . $supportEmail,
    ],
];
