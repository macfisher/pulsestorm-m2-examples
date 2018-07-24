<?php
namespace Pulsestorm\ToDoCrud\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Pulsestorm\ToDoCrud\Model\TodoItem','Pulsestorm\ToDoCrud\Model\ResourceModel\TodoItem');
    }
}
