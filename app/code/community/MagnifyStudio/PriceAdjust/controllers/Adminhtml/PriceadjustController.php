<?php
/**
 * Ability to mass price adjust using rules.
 * 
 * @package		PriceAdjust
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2014 Micheal Morgan
 * @license		MIT
 */
class MagnifyStudio_PriceAdjust_Adminhtml_PriceadjustController extends Mage_Adminhtml_Controller_action
{	
	protected function _initAction()
	{
		$this->loadLayout();
		return $this;
	}

    public function indexAction()
    {
		$this->_initAction();
		 
		$block = $this->getLayout()->createBlock('Mage_Core_Block_Template','adminhtml_priceadjust', array('template' => 'magnifystudio/priceadjust/priceadjust.phtml'));
		$this->getLayout()->getBlock('content')->append($block);
		$this->renderLayout();
    }

	protected function _isAllowed()
	{
		return Mage::getSingleton('admin/session')->isAllowed('priceadjust');
	}	
}
