<?php

namespace Pulsestorm\ToDoCrud\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Pulsestorm\ToDoCrud\Model\TodoItemFactory;

class Main extends Template {
	protected $toDoFactory;

	public function __construct(Context $context,
		TodoItemFactory $toDoFactory)
	{
		$this->toDoFactory = $toDoFactory;
		parent::__construct($context);
	}

    function _prepareLayout() {
    	$todo = $this->toDoFactory->create();
    	$collection = $todo->getCollection();

    	echo "<pre>";

    	foreach($collection as $item) {
    		var_dump('Item ID: ' . $item->getId());
    		var_dump($item->getData());
    	}

    	echo "</pre>";

    	exit;

    	/*$todo = $this->toDoFactory->create();
    	$todo->setData('item_text', "Finish my Magento article")->save();

    	var_dump("Done");
    	exit;*/
    }
}
