<?php
/**
 * Rewrites Mage_Core_Model_Store
 * Returns currency code based on visitor's IP Address
 *
 * @category   MR
 * @package    MR_AutoCurrency
 * @version    0.1.0
 * @author     Gabriel Duncan <gad2103@gmail.com> 
 * @link 	   
 */
 
class MR_AutoCurrency_Model_Store extends Mage_Core_Model_Store
{    	
    /**
     * Update default store currency code
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        $result = $this->getConfig(Mage_Directory_Model_Currency::XML_PATH_CURRENCY_DEFAULT);		
				
		return $this->getCurrencyCodeByIp($result);		
    }
		
	/**
     * Get Currency code by IP Address
     *
     * @return string
     */
	public function getCurrencyCodeByIp($result = '') 
	{
		// load GeoIP binary data file
		$geoIp = Mage::helper('autocurrency')->loadGeoIp();
		
		$ipAddress = Mage::helper('autocurrency')->getIpAddress();
		
		// get country code from ip address
		$countryCode = geoip_country_code_by_addr($geoIp, $ipAddress);
		
		if($countryCode == '') {
			return $result;
        } else if ($countryCode != "IN") {
            $countryCode = "US";
        }
		
		// get currency code from country code
		$currencyCode = geoip_currency_code_by_country_code($geoIp, $countryCode);
		
		// close the geo database  
		geoip_close($geoIp);	
		
		// if currencyCode is not present in allowedCurrencies
		// then return the default currency code
		$allowedCurrencies = Mage::getModel('directory/currency')->getConfigAllowCurrencies();		
		if(!in_array($currencyCode, $allowedCurrencies)) {
			return $result;
		}
		
		return $currencyCode;
	}
}
