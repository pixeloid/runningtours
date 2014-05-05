<?php
/**
 * Storefront_View_Helper_Cart
 *
 * Helper for all shopping cart
 *
 * @category   Storefront
 * @package    Storefront_View_Helper
 * @copyright  Copyright (c) 2008 Keith Pope (http://www.thepopeisdead.com)
 * @license    http://www.thepopeisdead.com/license.txt     New BSD License
 */
class App_View_Helper_Cart extends Zend_View_Helper_Abstract
{
    public $cartModel;

    public function Cart()
    {
        $this->cartModel = new App_Shop_Cart();

        return $this;
    }

    public function getSummary()
    {
        $currency = new Zend_Currency();
        $itemCount = $this->cartModel->getQty();


        $html  = '<p>Items: ' . $itemCount;
        $html .= ' | Total: '.$currency->toCurrency($this->cartModel->getSubTotal());
        $html .= ' | <a href="';
        $html .= $this->view->url(array(
            'controller' => 'shop', 
            'action' => 'view-cart',
            'module' => 'default'
            ),
            'default',
            true
        );
        $html .= '">View Cart</a></p>';

        return $html;
    }

    public function addForm(Entity\Product$product)
    {	
		$html = '';
		if ($product->instances->count())
		{
			$html .= "<h3>Sizes:</h3>\n<ul>\n";
			
			foreach($product->instances as $instance)
			{	
				$form = 'Currently out of stock...';
				
				if ($instance->qty > 0) {
					$form = new App_Form_Cart_Add();
			        $form->populate(array(
			            'productId' => $product->id,
			            'instanceId' => $instance->id,
			            'returnto' => $this->view->url()
			        ));
		
			        $form->setAction($this->view->url(array(
			            'controller' => 'shop',
			            'action' => 'add-to-cart',
			            'module' => 'default'
			            ),
			            'default',
			            true
			        ));
				}
				
				$html .= "<li>\n";
				$html .= "<strong>$instance->name</strong>\n";
				$html .= $form;
				$html .= "</li>\n";
			}
			
			$html .= "</ul>";

		}
		else
		{
			$form = new App_Form_Cart_Add();
	        $form->populate(array(
	            'productId' => $product->id,
	            'returnto' => $this->view->url()
	        ));
	
	        $form->setAction($this->view->url(array(
	            'controller' => 'shop',
	            'action' => 'add-to-cart',
	            'module' => 'default'
	            ),
	            'default',
	            true
	        ));
			
			$html .= $form;
			
		}

        return $html;
    }

    public function cartTable($plain = false)
    {	
		if(!$plain)
		{
			return $this->view->partial('partials/_cartlist.tpl', array('cart' => $this->cartModel));
		}
	
		

        $cartTable = new App_Form_Cart_Table(array('model' => $this->cartModel));

        $cartTable->setAction($this->view->url(array(
            'controller' => 'shop' ,
            'action' => 'update-cart'
            ),
            'default'
        ));

        // add qty elements, use subform so we can easily get them later
        $qtys = new Zend_Form_SubForm();

        foreach($this->cartModel as $item) {
            $qtys->addElement('text', base64_encode($item->rowId),
                array(
                    'value' => $item->qty,
                    'belongsTo' => 'quantity',
                    'style' => 'width: 20px;',
                    'decorators' => array(
                        'ViewHelper'
                    ),
                )
            );
        }
        $cartTable->addSubForm($qtys, 'qtys');


        return $cartTable;
    }

    public function formatAmount($amount)
    {
        $currency = new Zend_Currency();
        return $currency->toCurrency($amount);
    }

    private function _getShippingMultiOptions()
    {
        $currency = new Zend_Currency();
        $shipping = new App_Shop_Shipping();
        $options = array(0 => 'Please Select');

        foreach($shipping->getShippingOptions() as $key => $value) {
            $options["$value"] = $key . ' - ' . $currency->toCurrency($value);
        }

        return $options;
    }
}
