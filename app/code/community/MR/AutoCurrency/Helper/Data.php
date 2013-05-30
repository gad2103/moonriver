<?php
/**
 * Loads GeoIP binary data files 
 *
 * @category   MR
 * @package    MR_AutoCurrency
 * @version    0.1.0
 * @author     Gabriel Duncan <gad2103@gmail.com> 
 */
 
class MR_AutoCurrency_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
     * Load GeoIP binary data file
     *
     * @return string
     */
	public function loadGeoIp() 
	{	
		// Load geoip.inc
		include_once(Mage::getBaseDir().'/var/geoip/geoip.inc');

		// Open Geo IP binary data file
		$geoIp = geoip_open(Mage::getBaseDir().'/var/geoip/GeoIP.dat',GEOIP_STANDARD);
		return $geoIp;
	}
	
	/**
     * Get IP Address
     *
     * @return string
     */
	public function getIpAddress() 
	{	
		//return "27.123.127.255";
		return $_SERVER['REMOTE_ADDR'];
	}
}
