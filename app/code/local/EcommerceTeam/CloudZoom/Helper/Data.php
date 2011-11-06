<?php
/**
 * Cloud Image Zoom - Magento Extension
 *
 * @package     CloudZoom
 * @category    EcommerceTeam
 * @copyright   Copyright 2011 EcommerceTeam Inc. (http://www.ecommerce-team.com)
 * @version:    1.1.3
 */

class EcommerceTeam_CloudZoom_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @param string $node
     * @return mixed
     */
    public function getConfigData($node)
    {
        return Mage::getStoreConfig(sprintf('catalog/cloudzoom/%s', $node));
    }

    /**
     * @param string $node
     * @return bool
     */
    public function getConfigFlag($node)
    {
        return (bool) Mage::getStoreConfig(sprintf('catalog/cloudzoom/%s', $node));
    }
}
