<?php
/**
 * This file is part of the "Easy Shipping Rules" module for Magento eCommerce
 * developed by (c) Matheus Gontijo <matheus@matheusgontijo.com>
 */

/**
 * Easy Shipping Rules Paypal Express Review block
 *
 * @category    MatheusGontijo
 * @package     MatheusGontijo_EasyShippingRules
 * @author      Matheus Gontijo <matheus@matheusgontijo.com>
 * @license     OSL v3.0
 */
class MatheusGontijo_EasyShippingRules_Block_Paypal_Express_Review
    extends Mage_Paypal_Block_Express_Review
{
    /**
     * Overwrite parent method to adding properly carrier name
     * when it starts with assigned $carrierCode ("easyshippingrules")
     *
     * @param string $carrierCode
     *
     * @return string
     */
    public function getCarrierName($carrierCode)
    {
        $carrierName = Mage::helper('easyshippingrules')
            ->getCarrierName($carrierCode);

        if ($carrierName) {
            return $carrierName;
        }

        return parent::getCarrierName($carrierCode);
    }
}
