<?php
namespace Interview\SalesTab\Controller\Adminhtml\Index;

use Interview\SalesTab\Publisher\OrderExport\Publish as Publisher;


class Send extends \Magento\Backend\App\Action
{
    /**
    * @var resultJsonFactory
    */
    protected $resultJsonFactory;

    /**
    * @var orderRepository
    */
    protected $orderRepository;

    /**
    * @var Publisher
    */
    private $_publisher;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory ,
        Publisher $publisher
    )
    {
        parent::__construct($context);
        $this->resultFactory = $resultJsonFactory;
        $this->orderRepository = $orderRepository;
        $this->_publisher = $publisher;
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        if($params){
            $this->_publisher->publish($params['CustOrderDesc']);
        }
    }
}
