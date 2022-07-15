<?php

namespace Edumagento\HelloWorld\Plugin;

class UpdateProductName
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result): string
    {
        $result = "Vi-Magento HelloWorld";
        return $result;
    }
}
