<?php 
declare(strict_types=1);

namespace Interview\SalesTab\Consumer\OrderExport;

class Log {

    /**
    * @param $operation mixed
    **/
    public function processMessage($operation){
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/OrderExport.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info($operation);
    }
}