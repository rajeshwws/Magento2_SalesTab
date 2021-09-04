<?php
declare(strict_types=1);

namespace Interview\SalesTab\Publisher\OrderExport;

use \Magento\Framework\MessageQueue\PublisherInterface;

class Publish{
    const TOPIC_NAME = "orderexport.topic";

    private $publisher;

    /**
    * OrderExport Update constructor
    * @param PublisherInterface $publisherInterface
    **/

    public function __construct(
        PublisherInterface $publisherInterface
    ){
        $this->publisher = $publisherInterface;
    }

    /**
     * @param data
     */
    public function publish(array $data){
        return $this->publisher->publish(self::TOPIC_NAME, \GuzzleHttp\json_encode($data));
    }
}