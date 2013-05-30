<?php

class GTT_CustomZoom_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function imgFarivar($_prdt, $_img, $_fxsz, $_imgsz) {

        $_originalSizes = getimagesize($_img->getPath()); // path ready

        switch($_fxsz) {
            case "width":
                    $wdth = $_imgsz;
                    $hgt = $_originalSizes[1]/$_originalSizes[0]*$wdth+1;
                break;
            case "height": // height ready
                    $hgt = $_imgsz;
                    $wdth = $_originalSizes[0]/$_originalSizes[1]*$hgt+1;
                break;
            case "auto":
                    if ($_originalSizes[0] < $_originalSizes[1]) {
                        $hgt = $_imgsz;
                        $wdth = $_originalSizes[0]/$_originalSizes[1]*$hgt+1;
                    } else {
                        $wdth = $_imgsz;
                        $hgt = $_originalSizes[1]/$_originalSizes[0]*$wdth+1;
                    }
                break;
            case "both":
                    $hgt = $_imgsz;
                    $wdth = $_imgsz;
                break;
        }
        return Mage::helper('catalog/image')->init($_prdt,'image',$_img->getFile())->resize($wdth, $hgt);
    }

    public function variImgAli($_prdt) {
		$images = $_prdt->getMediaGalleryImages();
		if(count($images)){
			$image = $images->getFirstItem(); 
			foreach ($images as $_img){
				if($_img->getFile() == $_prdt->getImage()){
					return $_img;
				}
			}
			return $image;
		} else {
			$images = $_prdt->getMediaGallery('images');			
			$image = $images[0];
			foreach ($images as $_img){
				if($_img['file'] == $_prdt->getImage()){
					$image = $_img;
				}
			}			
			$image['url'] = $_prdt->getMediaConfig()->getMediaUrl($image['file']);
			$image['id'] = isset($image['value_id']) ? $image['value_id'] : null;
			$image['path'] = $_prdt->getMediaConfig()->getMediaPath($image['file']);			
			return new Varien_Object($image);
		}
    }

    public function confGetter() {

        $CustomZoom['fixSize'] = Mage::getStoreConfig('GTT_CustomZoom/general/fix_size'); 
        $CustomZoom['imgSize'] = Mage::getStoreConfig('GTT_CustomZoom/general/image_size'); 

        $cat_configs = unserialize(Mage::getStoreConfig('GTT_CustomZoom/category/options'));
        $whofirst = true;
        foreach($cat_configs as $_config) {
            if (Mage::registry('current_category')) {
                if ( (in_array($_config['category'], Mage::registry('current_category')->getPathIds())
                        && $_config['apply_child'] && $whofirst)
                        || $_config['category'] == Mage::registry('current_category')->getEntityId() )
                {
                    $CustomZoom['fixSize'] = $_config['fix_size']; 
                    $CustomZoom['imgSize'] = $_config['image_size']; 
                    if ($_config['category'] == Mage::registry('current_category')->getEntityId()) {
                       
                        $whofirst = false;
                    }
                }
            }
        }
        $CustomZoom['displayImages'] = Mage::getStoreConfig('GTT_CustomZoom/configurable/displayimages');

        $jadu = Mage::getStoreConfig('GTT_CustomZoom/general/effect');
        $padachhayo = Mage::getStoreConfig('GTT_CustomZoom/general/shade');
        $CustomZoom['conf'] = "zoomWidth:'".Mage::getStoreConfig('GTT_CustomZoom/general/zoom_width')."', ".
                "zoomHeight:'".Mage::getStoreConfig('GTT_CustomZoom/general/zoom_height')."', ".
                "position:'".Mage::getStoreConfig('GTT_CustomZoom/general/position')."', ".
                "adjustX:".Mage::getStoreConfig('GTT_CustomZoom/general/adjust_x').", ".
                "adjustY:".Mage::getStoreConfig('GTT_CustomZoom/general/adjust_y').", ".
                ($jadu=="shade"?"shade:'".$padachhayo."', "."shadeOpacity:".Mage::getStoreConfig('GTT_CustomZoom/general/shade_opacity').", ":"").
                ($jadu=="focus"?"softFocus:'true', ":"").
                "lensOpacity:".Mage::getStoreConfig('GTT_CustomZoom/general/lens_opacity').", ".
                "smoothMove:".Mage::getStoreConfig('GTT_CustomZoom/general/smooth_move').", ".
                "showTitle:'".(Mage::getStoreConfig('GTT_CustomZoom/general/show_title')?"true":"false")."', ".
                "titleOpacity:".Mage::getStoreConfig('GTT_CustomZoom/general/title_opacity');
        return $CustomZoom;
    }

    public function getAttributeId() {
        return Mage::getStoreConfig('GTT_CustomZoom/configurable/attribute');
    }
}