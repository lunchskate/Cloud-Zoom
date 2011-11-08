<?php
/**
 * Cloud Image Zoom - Magento Extension
 *
 * @package     CloudZoom
 * @category    EcommerceTeam
 * @copyright   Copyright 2011 EcommerceTeam Inc. (http://www.ecommerce-team.com)
 * @version:    1.1.3
 */

class EcommerceTeam_CloudZoom_Block_Product_View_Media extends Mage_Catalog_Block_Product_View_Media
{
    /** @var EcommerceTeam_CloudZoom_Helper_Data */
    protected $_helper;

    /**
     * Retrieve extension helper
     *
     * @return EcommerceTeam_CloudZoom_Helper_Data
     */
    public function getLocalHelper()
    {
        if (is_null($this->_helper)) {
            $this->_helper = Mage::helper('ecommerceteam_cloudzoom');
        }
        return $this->_helper;
    }

    /**
     * @return EcommerceTeam_CloudZoom_Block_Product_View_Media
     */
    protected function _beforeToHtml(){
        if ($this->getLocalHelper()->getConfigFlag('enabled')) {
            $this->setTemplate('ecommerceteam/cloud-zoom/catalog/product/view/media.phtml');
        }
        return $this;
    }
}
