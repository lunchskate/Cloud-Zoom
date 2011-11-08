<?php
/**
 * Cloud Image Zoom - Magento Extension
 *
 * @package     CloudZoom
 * @category    EcommerceTeam
 * @copyright   Copyright 2011 EcommerceTeam Inc. (http://www.ecommerce-team.com)
 * @version:    1.1.3
 */

class EcommerceTeam_CloudZoom_Model_System_Config_Source_Position
{
    /** @var EcommerceTeam_CloudZoom_Helper_Data */
    protected $_helper;

    /**
     * @return EcommerceTeam_CloudZoom_Helper_Data
     */
    public function getHelper()
    {
        if (is_null($this->_helper)) {
            $this->_helper = Mage::helper('ecommerceteam_cloudzoom');
        }
        return $this->_helper;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $helper = $this->getHelper();
        return array(
            'right'  => $helper->__('Right'),
            'left'   => $helper->__('Left'),
            'top'    => $helper->__('Top'),
            'bottom' => $helper->__('Bottom'),
            'inside' => $helper->__('Inside')
        );
    }
}
