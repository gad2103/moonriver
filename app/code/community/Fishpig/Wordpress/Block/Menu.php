<?php
/**
 * @category    Fishpig
 * @package     Fishpig_Wordpress
 * @license     http://fishpig.co.uk/license.txt
 * @author      Ben Tideswell <help@fishpig.co.uk>
 */

class Fishpig_Wordpress_Block_Menu extends Mage_Page_Block_Html_Topmenu
{
	/**
	 * Get top menu html
	 *
	 * @param string $outermostClass
	 * @param string $childrenWrapClass
	 * @return string
	 */
	public function getHtml($outermostClass = '', $childrenWrapClass = '')
	{
		$this->_menu->setOutermostClass($outermostClass);
		$this->_menu->setChildrenWrapClass($childrenWrapClass);

		return trim($this->_getHtml($this->_menu, $childrenWrapClass));
	}

	/**
	 * Load and render the menu
	 *
	 * @return bool
	 */
	protected function _beforeToHtml()
	{
		if ($this->getMenuId()) {
			$menu = Mage::getModel('wordpress/menu')->load($this->getMenuId());
			
			if ($menu->getId()) {
				$this->setMenu($menu);
				
				if ($menu->applyToTreeNode($this->_menu)) {
					if (($html = trim($this->getHtml())) !== '') {
						$html = sprintf('<ul %s>%s</ul>', $this->_getListParams(), $html);
					
					
						$this->setMenuHtml($this->_beforeRenderMenuHtml($html));
					}
					
					return true;
				}
			}
		}
		
		return false;
	}
	
	/*
	 * Generate the list element parameters
	 *
	 * @return string
	 */
	protected function _getListParams()
	{
		$params = array();
		
		if ($this->getListClass()) {
			$params[] = sprintf('class="%s"', $this->getListClass());
		}
		
		if ($this->getListId()) {
			$params[] = sprintf('id="%s"', $this->getListId());
		}
		
		return implode(' ', $params);
	}
	
	/**
	 * Add the wrapper div if required
	 *
	 * @param string $html
	 * @return string
	 */
	protected function _beforeRenderMenuHtml($html)
	{
		if ($this->getIncludeWrapper() || $this->getWrapperId() || $this->getWrapperClass()) {
			$params = array();
			
			if ($this->getWrapperId()) {
				$params[] = sprintf('id="%s"', $this->getWrapperId());
			}
			
			if ($this->getWrapperClass()) {
				$params[] = sprintf('class="%s"', $this->getWrapperClass());
			}
			
			return sprintf('<div %s>%s</div>', implode(' ', $params), $html);
		}	
		
		return $html;
	}
	
	/**
	 * Return the menu HTML
	 *
	 * @return string
	 */
    protected function _toHtml()
    {
    	if (!$this->getTemplate()) {
	        if ($this->_beforeToHtml() === false) {
	            return '';
	        }
	
	        return $this->getMenuHtml();
	    }
	    
	    return parent::_toHtml();
    }
}
