<?php
namespace Edumagento\HelloWorld\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    const CACHE_TAG = 'edumagento_helloworld_post';

    protected $_cacheTag = 'edumagento_helloworld_post';

    protected $_eventPrefix = 'edumagento_helloworld_post';

    protected function _construct()
    {
        $this->_init('Edumagento\HelloWorld\Model\ResourceModel\Post');
    }
}
