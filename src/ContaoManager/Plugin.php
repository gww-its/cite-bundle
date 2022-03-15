<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) Manfred Gipp
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CiteBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CiteBundle\ContaoCiteBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoCiteBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
