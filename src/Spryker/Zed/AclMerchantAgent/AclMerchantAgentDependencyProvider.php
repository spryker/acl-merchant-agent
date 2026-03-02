<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AclMerchantAgent;

use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Spryker\Zed\AclMerchantAgent\AclMerchantAgentConfig getConfig()
 */
class AclMerchantAgentDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @uses \Spryker\Zed\Security\Communication\Loader\Services\AuthorizationCheckerServiceLoader::SERVICE_SECURITY_AUTHORIZATION_CHECKER
     *
     * @var string
     */
    public const SERVICE_SECURITY_AUTHORIZATION_CHECKER = 'security.authorization_checker';

    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = $this->addAuthorizationCheckerService($container);

        return $container;
    }

    protected function addAuthorizationCheckerService(Container $container): Container
    {
        $container->set(static::SERVICE_SECURITY_AUTHORIZATION_CHECKER, function (Container $container) {
            return $container->getApplicationService(static::SERVICE_SECURITY_AUTHORIZATION_CHECKER);
        });

        return $container;
    }
}
