<?php

namespace Qbus\IvmProClientBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Qbus\IvmProClientBundle\IvmProClientBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(IvmProClientBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
