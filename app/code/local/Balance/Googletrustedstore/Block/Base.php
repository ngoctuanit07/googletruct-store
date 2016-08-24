<?php

class Balance_Googletrustedstore_Block_Base extends Mage_Core_Block_Template
{
    protected $_template = "googletrustedstore/base.phtml";

    protected $_locale = null;

    protected $_country = null;

    protected $_language = null;

    protected function _construct()
    {
        parent::_construct();

        $this->_locale = Mage::app()->getLocale()->getLocale();

        list($this->_language, $this->_country) = explode('_', $this->_locale);
    }

    public function getTrustedStoreId()
    {
        return Mage::getStoreConfig(Balance_Googletrustedstore_Helper_Data::XML_PATH_ACCOUNT);
    }

    public function getLocale()
    {
        return $this->_locale;
    }

    public function getShoppingAccountId()
    {
        return Mage::getStoreConfig(Balance_Googletrustedstore_Helper_Data::XML_PATH_FEED_ACCOUNT);
    }

    public function getShoppingCountry()
    {
        return $this->_country;
    }

    public function getShoppingLanguage()
    {
        return $this->_language;
    }

}