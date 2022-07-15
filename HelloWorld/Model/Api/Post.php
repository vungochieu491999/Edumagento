<?php
namespace Edumagento\HelloWorld\Model\Api;

use Edumagento\HelloWorld\Api\TestInterface;
use Edumagento\HelloWorld\Model\ResourceModel\Post\Collection;

class Post implements TestInterface
{
    /** @var PostFactory */
    private $postFactory;

    /** @var Collection */
    private $collection;

    public function _construct(\Edumagento\HelloWorld\Model\PostFactory $postFactory, Collection $collection)
    {
        $this->postFactory = $postFactory;
        $this->collection = $collection;
    }

    public function getPost($data): string
    {
        return "successfully saved " . $data;
    }
}
