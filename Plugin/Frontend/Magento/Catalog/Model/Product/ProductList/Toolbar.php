<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace FabrizioBalliano\CategorySortDirection\Plugin\Frontend\Magento\Catalog\Model\Product\ProductList;

class Toolbar
{
    public function __construct(
        protected \Magento\Catalog\Helper\Data $catalogHelper
    )
    {
    }

    public function afterGetDirection(
        \Magento\Catalog\Model\Product\ProductList\Toolbar $toolbar,
        $result
    ) {
        if ($result) return $result;

        $sortDirection = $this->catalogHelper->getCategory()->getSortDirection();
        if ($sortDirection == 1) return 'ASC';
        if ($sortDirection == 2) return 'DESC';

        return null;
    }
}

