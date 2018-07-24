<?php

namespace Pulsestorm\ToDoCrud\Model;

use \Magento\Framework\Model\AbstractModel;
use \Pulsestorm\ToDoCrud\Api\Data\TodoItemInterface;
use \Magento\Framework\DataObject\IdentityInterface;

class TodoItem extends AbstractModel implements TodoItemInterface,
	IdentityInterface
{
    const CACHE_TAG = 'pulsestorm_todocrud_todoitem';

    protected function _construct() {
        $this->_init('Pulsestorm\ToDoCrud\Model\ResourceModel\TodoItem');
    }

    public function getIdentities() {
    	return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
