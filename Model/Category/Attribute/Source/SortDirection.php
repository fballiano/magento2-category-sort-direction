<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace FabrizioBalliano\CategorySortDirection\Model\Category\Attribute\Source;

class SortDirection extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    /**
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['value' => '', 'label' => __('Default')],
                ['value' => '1', 'label' => __('ASC')],
                ['value' => '2', 'label' => __('DESC')]
            ];
        }
        return $this->_options;
    }
}

