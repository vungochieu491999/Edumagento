<?php
namespace Edumagento\HelloWorld\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'edumagento_helloworld_post';

    protected $_cacheTag = 'edumagento_helloworld_post';

    protected $_eventPrefix = 'edumagento_helloworld_post';

    protected function _construct()
    {
        $this->_init('Edumagento\HelloWorld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
