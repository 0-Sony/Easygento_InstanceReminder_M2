<?php
/**
 * @license MIT. Please see the LICENSE file for more info.
 * @author Phuong LE <sony@menincode.com>
 * @copyright Copyright (c) 2019 Men In Code Ltd (http://www.menincode.com)
 */

namespace Easygento\InstanceReminder\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Config extends AbstractHelper
{
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_ENABLED = 'easygento_instancereminder/general/enabled';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_DISPLAY_ADMIN_LOGIN = 'easygento_instancereminder/general/display_admin_login';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_INSTANCE_TYPE = 'easygento_instancereminder/general/instance_type';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_CUSTOM_LABEL = 'easygento_instancereminder/general/custom_label';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_DEVELOP = 'easygento_instancereminder/general/dev';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_PREPROD = 'easygento_instancereminder/general/preprod';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_PRODUCTION = 'easygento_instancereminder/general/production';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_CUSTOM = 'easygento_instancereminder/general/custom';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_LABEL_COLOR = 'easygento_instancereminder/general/label_color';

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_ENABLED);
    }

    /**
     * @return boolean
     */
    public function isDisplayedOnAdminLogin()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_DISPLAY_ADMIN_LOGIN);
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_INSTANCE_TYPE);
    }

    /**
     * @return mixed
     */
    public function getInstanceName()
    {
        if ($this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_INSTANCE_TYPE) == 'custom') {
            return $this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_CUSTOM_LABEL);
        }
        return $this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_INSTANCE_TYPE);
    }

    /**
     * @return mixed
     */
    public function getColorByInstance()
    {
        $instance = $this->getInstance();
        return '#' . $this->scopeConfig->getValue(constant('self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_' . strtoupper($instance)));
    }

    /**
     * @return mixed
     */
    public function getLabelColor()
    {
        return '#' . $this->scopeConfig->getValue(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_GENERAL_LABEL_COLOR);
    }
}
