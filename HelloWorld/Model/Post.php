<?php
namespace Edumagento\HelloWorld\Model;

use Edumagento\HelloWorld\Api\TestInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements TestInterface
{
    const CACHE_TAG = 'edumagento_helloworld_post';

    protected $_cacheTag = 'edumagento_helloworld_post';

    protected $_eventPrefix = 'edumagento_helloworld_post';

    protected function _construct()
    {
        $this->_init('Edumagento\HelloWorld\Model\ResourceModel\Post');
    }

    public function getPost($params)
    {
        // TODO: Implement getPost() method.
    }
}
