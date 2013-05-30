<?php
class GTT_CustomZoom_AjaxController extends Mage_Core_Controller_Front_Action
{
public function imagesAction() {
$config = Mage::helper("CustomZoom")->confGetter();
$productIds = $this->getRequest()->getParam("products");

$i = 0;
foreach ($productIds as $_id): //id chek
	$_prdt = Mage::getModel("catalog/product")->load($_id);
	switch ($config['displayImages']):
		case "base":
			$_img = Mage::helper("CustomZoom")->variImgAli($_prdt); //set helper
			$response[$i]['big'] = $_img->getUrl();
			$response[$i]['small'] = Mage::helper("CustomZoom")->imgFarivar($_prdt, $_img, $config['fixSize'], $config['imgSize'])->__toString();
			$response[$i]['title'] = $_img->getLabel();
			$response[$i]['thumb'] = Mage::helper('catalog/image')->init($_prdt, 'thumbnail', $_img->getFile())->resize(56)->__toString();
			$i++;
			break;
			
		case "all": //for all 
			$galleryImages = $_prdt->getMediaGalleryImages();
			if (count($galleryImages) > 0):
				foreach ($galleryImages as $_img):
					$response[$i]['big'] = $_img->url;
					$response[$i]['small'] = Mage::helper("CustomZoom")->imgFarivar($_prdt, $_img, $config['fixSize'], $config['imgSize'])->__toString();
					$response[$i]['title'] = $_img->getLabel();
					$response[$i]['thumb'] = Mage::helper('catalog/image')->init($_prdt, 'thumbnail', $_img->getFile())->resize(56)->__toString(); //thumline done
					$i++;
				endforeach;
			endif;
			break;
	endswitch; 
endforeach;
echo json_encode($response);
    }
}