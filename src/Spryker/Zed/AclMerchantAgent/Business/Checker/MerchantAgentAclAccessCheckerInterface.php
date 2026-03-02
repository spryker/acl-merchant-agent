<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AclMerchantAgent\Business\Checker;

use Generated\Shared\Transfer\RuleTransfer;
use Generated\Shared\Transfer\UserTransfer;

interface MerchantAgentAclAccessCheckerInterface
{
    public function isApplicable(UserTransfer $userTransfer, RuleTransfer $ruleTransfer): bool;

    public function checkAccess(UserTransfer $userTransfer, RuleTransfer $ruleTransfer): bool;
}
