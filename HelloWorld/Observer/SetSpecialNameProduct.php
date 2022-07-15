<?php

namespace Edumagento\HelloWorld\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class SetSpecialNameProduct implements ObserverInterface
{
    public function execute(EventObserver $observer)
    {

        $presentProductName = $observer->getProduct()->getName();

        $exProductName = explode("|", $presentProductName);

        if (!empty($exProductName[0]) && trim($exProductName[0]) !== '[HIEUVN]') {
            $revertProductName = "[HIEUVN]|" . $presentProductName;

            $observer->getProduct()->setName($revertProductName);
        }
    }
}
