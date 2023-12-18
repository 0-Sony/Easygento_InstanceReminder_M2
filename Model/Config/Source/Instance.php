<?php

declare(strict_types=1);

/**
 * Easygento
 * @author Phuong LE <web.phuong.le@gmail.com>
 * @license Open Source License
 */

namespace Easygento\InstanceReminder\Model\Config\Source;

class Instance implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'develop', 'label' => __('Develop') ],
            ['value' => 'preprod', 'label' => __('Preprod')],
            ['value' => 'production', 'label' => __('Production')],
            ['value' => 'custom', 'label' => __('Custom')]
        ];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            ['value' => 'develop', 'label' => __('Develop') ],
            ['value' => 'preprod', 'label' => __('Preprod')],
            ['value' => 'production', 'label' => __('Production')],
            ['value' => 'custom', 'label' => __('Custom')]
        ];
    }
}
