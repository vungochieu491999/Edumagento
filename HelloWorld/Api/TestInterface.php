<?php
namespace Edumagento\HelloWorld\Api;

interface TestInterface
{
    /**
     * POST for test api
     * @param string|array $data
     * @return string
     */
    public function getPost($params);
}
