<?php
/**
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Phuong LE <sony@menincode.com> <@>
 * @copyright Copyright (c) 2019 Menincode (http://www.menincode.com)
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
