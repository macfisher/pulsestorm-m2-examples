<?php
namespace Pulsestorm\ToDoCrud\Api;

use Pulsestorm\ToDoCrud\Api\Data\TodoItemInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface TodoItemRepositoryInterface 
{
    public function save(TodoItemInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(TodoItemInterface $page);

    public function deleteById($id);
}
