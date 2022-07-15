<?php

namespace Edumagento\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';

    protected function _construct()
    {
        $this->_init('Edumagento\HelloWorld\Model\Post', 'Edumagento\HelloWorld\Model\ResourceModel\Post');
    }
}
