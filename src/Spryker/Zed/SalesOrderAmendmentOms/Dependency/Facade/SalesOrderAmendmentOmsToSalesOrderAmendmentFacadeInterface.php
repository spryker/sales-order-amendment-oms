<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesOrderAmendmentOms\Dependency\Facade;

use Generated\Shared\Transfer\SalesOrderAmendmentQuoteCollectionDeleteCriteriaTransfer;
use Generated\Shared\Transfer\SalesOrderAmendmentQuoteCollectionResponseTransfer;
use Generated\Shared\Transfer\SalesOrderAmendmentQuoteCollectionTransfer;
use Generated\Shared\Transfer\SalesOrderAmendmentQuoteCriteriaTransfer;

interface SalesOrderAmendmentOmsToSalesOrderAmendmentFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\SalesOrderAmendmentQuoteCriteriaTransfer $salesOrderAmendmentQuoteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\SalesOrderAmendmentQuoteCollectionTransfer
     */
    public function getSalesOrderAmendmentQuoteCollection(
        SalesOrderAmendmentQuoteCriteriaTransfer $salesOrderAmendmentQuoteCriteriaTransfer
    ): SalesOrderAmendmentQuoteCollectionTransfer;

    /**
     * @param \Generated\Shared\Transfer\SalesOrderAmendmentQuoteCollectionDeleteCriteriaTransfer $salesOrderAmendmentQuoteCollectionDeleteCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\SalesOrderAmendmentQuoteCollectionResponseTransfer
     */
    public function deleteSalesOrderAmendmentQuoteCollection(
        SalesOrderAmendmentQuoteCollectionDeleteCriteriaTransfer $salesOrderAmendmentQuoteCollectionDeleteCriteriaTransfer
    ): SalesOrderAmendmentQuoteCollectionResponseTransfer;
}
